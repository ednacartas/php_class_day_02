<?php

//if the page is not set in the query string, set it to home
if( isset( $_GET['page'] ) ){
  $current = $_GET['page'];
}else{
  $current = 'home';
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mini Site with Query String Vars</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Simplest Little Site</h1>
      <nav>
        <ul>
          <li><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=about">About</a></li>
          <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <?php
        switch( $current ){
          case 'home' :
            include('includes/home_content.php');
          break;
          case 'about' :
            include('includes/about_content.php');
          break;
          case 'contact' :
            include('includes/contact_content.php');
          break;
          default:
            echo 'Use the navigation!';
        }
       ?>
    </main>
    <footer>
      &copy; 2017 Platt College
    </footer>
  </body>
</html>
