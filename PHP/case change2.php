<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

    <?php

      if (isset($_POST['text'])) {
        global $txt;
        $txt = $_POST['text'];
        echo  ucwords($txt);
        //ucfirst
        //ucwords
        //strtoupper
        //strtolower

      }

     ?>



          <form  action="case change2.php" method="post">
            <input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
            <input type="submit" value="Submit">
          </form>

</body>
</html>
