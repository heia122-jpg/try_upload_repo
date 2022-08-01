<?php

  function connector(){
    $host = "localhost";
    $user = "root";
    $pass = "NormaIsog";
    $db   = "social_media_sys";

    $conn = new mysqli($host,$user,$pass,$db);
    
    if($conn->error) {
      echo $conn->error;
    }else {
      return $conn;
    }
  }