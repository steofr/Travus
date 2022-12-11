<?php 
//recupere la session en cours
session_start();
//destruction session
session_destroy();
//redirection
header("Location: index.php");

?>