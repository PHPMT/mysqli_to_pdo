<?php

  function openConnect($host, $user, $pass, $nameDataBase) { 
    $connect = new mysqli($host, $user, $pass, $nameDataBase);

    return $connect;
  }