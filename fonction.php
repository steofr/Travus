<?php

function data_cleaner($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }

function pswd_crypter($data){
  $data = password_hash($data, PASSWORD_DEFAULT); 
  return $data;
}
?>