<?php

  include('./db/connect.php');
  
  function getNews() {
    $dbDriver = "mysql";
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $nameDataBase = "blog";
  
    $conn = openConnect($dbDriver, $host, $user, $pass, $nameDataBase);
    $newsResult = $conn->query("SELECT * FROM news");
    $news = $newsResult->fetchAll();
    return $news;  
  }

