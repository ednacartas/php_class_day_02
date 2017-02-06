<?php
//hide "notices" because they are not really errors (add to snippets later php error reporting - hide notices)
error_reporting( E_ALL & ~E_NOTICE );

//begin form parser
//extract the data
$name       = $_POST['name'];
$breakfast  = $_POST['breakfast'];
$did_submit = $_POST['did_submit'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POST method example</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Thanks for taking my survey!</h1>
    <p>Answer these questions, please</p>
    <!-- <form action="post.php" method="post"> -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="the_name">What's your name?</label>
      <input type="text" name="name" id="the_name">

      <label for="the_breakfast">What is your favorite breakfast food?</label>
      <input type="text" name="breakfast" id="the_breakfast">

      <input type="submit" value="Submit!"/>
      <input type="hidden" name="did_submit" value="true">
    </form>

    <?php
    if( $did_submit ){
      if( $name and $breakfast ){
        //display the values from the form
        echo 'Good Morning, ';
        echo $name;
        echo ', ';
        echo $breakfast;
        echo ' sounds delicious!';
      }else{
        echo 'Please fill in both fields';
      }
    }
     ?>
  </body>
</html>
