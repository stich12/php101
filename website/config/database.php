<?php defined(BASEPATH) || exit('No direct script access allowed');

// updating and deleting users/posts will be a homework exercise for the students

function getDBConnection()
{
    try {
        return new PDO('mysql:dbname=php101;host=127.0.0.1', 'root', 'root');
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}

function createUser($user)
{
    $db = getDBConnection();

    if ($db instanceof PDO) {
        $sth = $db->prepare('INSERT INTO \'Users\' VALUES (:username, :password, :color)');
        $sth->execute(array(
            ':username' => $db->quote($user['username']),
            ':password' => $db->quote($user['password']),
            ':color' => $db->quote($user['color'])
        ));

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            return $user;
        } else {
            // return that there was an error
        }
    } else {
        // return that there was an error
    }
}

function getUser($username)
{
    $db = getDBConnection();
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
}

function createPost($post)
{
    $db = getDBConnection();
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
}

function getPost($id)
{
    $db = getDBConnection();
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
}

function getRecentPosts()
{
    $db = getDBConnection();
    $sth = $db->prepare('SELECT * FROM \'Posts\' LIMIT 5');
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    if ($result !== false) {
        return $result;
    } else {
        // return that there was an error
    }
}
