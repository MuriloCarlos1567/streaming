<?php

  require_once("includes/config.php");
  require_once("includes/classes/PreviewProvider.php");
  require_once("includes/classes/Entity.php");

  if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
  }

  $userLoggedIn = $_SESSION["userLoggedIn"];
?>
<!DOCTYPE html>
  <html>
    <head>
      <title> Netflix </title>
      <link rel="stylesheet" type="text/css" href="assets/style/index.css"/>
    </head>
    <body>
        <div class='wrapper'>