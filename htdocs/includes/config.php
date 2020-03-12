<?php
ob_start(); //Buffer
session_start();

date_default_timezone_set("America/Sao_Paulo");

try {
  $con = new PDO("mysql:dbname=netflix;host=localhost", "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
  exit("Connection failed: " . $e->getMessage());
}
?>