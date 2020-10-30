<?php
session_start();
include("config.php");




session_unset();
header('location:index.php');

?>

