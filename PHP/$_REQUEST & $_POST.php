<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <hr>
   php Superglobals [$_REQUEST & $_POST]
   <hr>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      Username: <input type="text" name="username" value="">
      <input type="submit" value="Submit">
   </form>

   <?php

    if ($_SERVER["REQUEST_METHOD"]== "POST") {
      $name = $_REQUEST['username'];

      if (empty($name)) {
        echo "<span style='color:red'>Username field must not be empty</span>";
      }else {
        echo "<span style='color:red'>You have submitted: .$name</span>";
      }
    }

    ?>
 </body>
 </html>
