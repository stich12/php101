<?php
defined('BASEPATH') || exit('No direct script access allowed');
require_once('config.php');

/**
 * Gets a single visitor record from the sql database by primary key
 * @return array
 */
function visitor($ID = null)
{
  try {
    $connection = new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    var_dump($e->getMessage());
    exit;
  }

  $sql = sprintf("SELECT * FROM visitors WHERE ID = %s", $connection->quote($email));
  $sth = $connection->prepare($sql);
  return $sth->fetchAll();
}

/**
 * Gets all visitors from the database
 * @return array
 */
function visitors()
{
  try {
    $connection = new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    var_dump($e->getMessage());
    exit;
  }

  $sth = $connection->prepare("SELECT * FROM visitors");
  $sth->execute();
  return $sth->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Saves a visitor record to the database
 * @return void
 */
function saveVisitor(Visitor $visitor)
{
  try {
    $connection = new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    var_dump($e->getMessage());
    exit;
  }

  if (is_null($visitor->ID)) {
    $sql = sprintf("INSERT INTO visitors (Name, Email, Age, Address, Photo_url) VALUES (%s, %s, %s, %s, %s)",
      $connection->quote($visitor->name),
      $connection->quote($visitor->email),
      $connection->quote($visitor->age),
      $connection->quote($visitor->address),
      $connection->quote($visitor->photo_url));
  } else {
    $sql = sprintf("UPDATE visitors SET Name = %s, Email = %s, Age = %s,  Address = %s,  Photo_url = %s WHERE ID =  %s",
      $connection->quote($visitor->name),
      $connection->quote($visitor->email),
      $connection->quote($visitor->age),
      $connection->quote($visitor->address),
      $connection->quote($visitor->photo_url),
      $connection->quote($visitor->ID));
  }

  $sth = $connection->prepare($sql);
  $sth->execute();
}

/**
 * Removes a visitor record from the sql database by email
 * @return void
 */
function deleteVisitor($email)
{
  try {
    $connection = new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    var_dump($e->getMessage());
    exit;
  }

  $sql = sprintf("DELETE FROM visitors WHERE email = %s", $connection->quote($email));
  $sth = $connection->prepare($sql);
  $sth->execute();
}

class Visitor
{
  /**
   * @var int $ID The primary key of the visitor record
   *
   */
  public $ID = null;

  /**
   * @var string $name The name of a visitor
   *
   */
  public $name;

  /**
   * @var int $age The age of a visitor
   *
   */
  public $age;

  /**
   * @var string $email The email of the visitor
   *
   */
  public $email;

  /**
   * @var string $address The address of the visitor
   *
   */
  public $address;

  /**
   * @var string $photo_url The url that points to a photo of a visitor
   *
   */
  public $photo_url;

  /**
   * Constructor
   * @return void
   */
  public function __construct()
  {
  }
}
