<?php

  function openConnect($dbDrive, $host, $user, $pass, $nameDataBase) {
    try {
      $connect = new PDO("$dbDrive:host=$host;dbname=$nameDataBase", $user, $pass);

      return $connect;
    } catch (PDOExeption $err) {
      echo $err->getMessage();
    }
  }