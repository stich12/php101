<?php defined('BASEPATH') || exit('No direct script access allowed');

// updating and deleting users/posts will be a homework exercise for the students

function getDBConnection()
{
    try {
        return new PDO('mysql:dbname=php101;host=localhost', 'root', 'root');
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}

function createUser($user)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('INSERT INTO Users (username, password, color) VALUES (:username, :password, :color)');
        $result = $sth->execute(array(
            ':username' => $user['username'],
            ':password' => $user['password'],
            ':color' => $user['color']
        ));

        if ($result === true) {
            $user['success'] = true;
            return $user;
        } else {
            $user['success'] = false;
            $user['message'] = 'There was a problem performing the query';
            return $user;
        }
    } else {
        $user['success'] = false;
        $user['message'] = 'There was a problem connecting to the database';
        return $user;
    }
}

function getUser($username)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM \'Users\' WHERE username = :username');
        $sth->execute(array(
            ':username' => $db->quote($username)
        ));

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            return $result;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}

function getAllUsers()
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM \'Users\'');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            return $result;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}

function createPost($post)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('INSERT INTO \'Posts\' VALUES (:title, :datetime, :content)');
        $sth->execute(array(
            ':title' => $db->quote($post['title']),
            ':datetime' => $db->quote($post['datetime']),
            ':content' => $db->quote($post['content'])
        ));

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            return $result;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}

function getPost($id)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM \'Posts\' WHERE ID = \':id\'');
        $sth->execute(array(
            ':id' => $db->quote($id)
        ));

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            return $result;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}

function getAllPosts()
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM \'Posts\'');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            return $result;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}

function getRecentPosts()
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM \'Posts\' LIMIT 5');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {

            $data = array();

            foreach ($result as $post) {
                array_push($data, $post);

                $data['excerpt'] = substr($post['content'], 0, 20);
            }

            return $data;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}