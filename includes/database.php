<?php

function getDB(){
  $db_host = "localhost";
  $db_name = 'cms';
  $db_user = 'alexis';
  $db_pass = 'V[Ixvtpj[CSC6HOX';

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  return $conn;
}
?>