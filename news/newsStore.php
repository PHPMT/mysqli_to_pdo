<?php

  include('./db/connect.php');
  
  function getNews() {
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $nameDataBase = "blog";
  
    $conn = openConnect($host, $user, $pass, $nameDataBase);
    $newsResult = $conn->query("SELECT * FROM news");
    $news = $newsResult->fetch_all();
    return $news;
  }

