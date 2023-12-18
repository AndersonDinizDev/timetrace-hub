<?php

class Database
{
  public static function getConnection()
  {
    try {
      $envPath = realpath(dirname(__FILE__) . '/../env.ini');
      $env = parse_ini_file($envPath);

      $host = $env['host'];
      $db = $env['database'];
      $username = $env['username'];
      $password = $env['password'];

      $database = new PDO("mysql:host=$host;dbname=$db", $username, $password);
      $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $database;
    } catch (PDOException $err) {
      throw $err;
    }
  }
}
