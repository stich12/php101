<?php defined('BASEPATH') || exit('No direct script access allowed');

// updating and deleting users/posts will be a homework exercise for the students

function getDBConnection()
{
    try {
        return new PDO('mysql:dbname=php101;host=localhost', 'root', 'root');
    } catch (PDOException $e) {
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
        $sth = $db->prepare('SELECT * FROM Users WHERE username = :username');
        $sth->execute(array(
            ':username' => $username
        ));

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            $result['success'] = true;
            return $result;
        } else {
            $result['success'] = false;
            $result['message'] = 'There was a problem performing the query';
            return $result;
        }
    } else {
        $result['success'] = false;
        $result['message'] = 'There was a problem connecting to the database';
        return $result;
    }
}

function getAllUsers()
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM Users');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            $result['success'] = true;
            return $result;
        } else {
            $result['success'] = false;
            $result['message'] = 'There was a problem performing the query';
            return $result;
        }
    } else {
        $result['success'] = false;
        $result['message'] = 'There was a problem connecting to the database';
        return $result;
    }
}

function createPost($post)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('INSERT INTO Posts (Title, Datetime, Content) VALUES (:title, :datetime, :content)');
        $result = $sth->execute(array(
            ':title' => $post['title'],
            ':datetime' => $post['datetime'],
            ':content' => $post['content']
        ));

        if ($result === true) {
            $post['success'] = true;
            return $post;
        } else {
            $post['success'] = false;
            $post['message'] = 'There was a problem performing the query';
            return $post;
        }
    } else {
        $post['success'] = false;
        $post['message'] = 'There was a problem connecting to the database';
        return $post;
    }
}

function getPost($id)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM Posts WHERE ID = :id');
        $sth->execute(array(
            ':id' => (int)$id
        ));

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            $result['success'] = true;
            return $result;
        } else {
            $result['success'] = false;
            $result['message'] = 'There was a problem performing the query';
            return $result;
        }
    } else {
        $result['success'] = false;
        $result['message'] = 'There was a problem connecting to the database';
        return $result;
    }
}

function getAllPosts()
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM Posts');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            $result['success'] = true;
            return $result;
        } else {
            $result['success'] = false;
            $result['message'] = 'There was a problem performing the query';
            return $result;
        }
    } else {
        $result['success'] = false;
        $result['message'] = 'There was a problem connecting to the database';
        return $result;
    }
}

function getRecentPosts()
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('SELECT * FROM Posts LIMIT 5');
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            $result['success'] = true;
            return $result;
        } else {
            $result['success'] = false;
            $result['message'] = 'There was a problem performing the query';
            return $result;
        }
    } else {
        $result['success'] = false;
        $result['message'] = 'There was a problem connecting to the database';
        return $result;
    }
}