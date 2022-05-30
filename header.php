<?php

session_start();

?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="This is an example of meta description.This will often show up in search results.">
      <meta name=viewpoint content="widht=device-widh,initial scale=1">
      <title></title>
      <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
      <div>


                <?php
                if (isset($_SESSION['userId'])) {
                  echo '<form action="logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                }
                else {
                  echo '<form action="login.inc.php" method="post">
                      <input type="text" name="mailuid" placeholder="Username/E-mail...">
                      <input type="password" name="pwd" placeholder="Password..">
                      <button type="submit" name="login-submit">Login</button>
                      </form>
                      <a href="signup.php">Signup</a>';
                }

                ?>
       </div>
