<?php
  $fonts = "verdana";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Syntax</title>

  <style >
    body{font-family: <?php echo   $fonts; ?>}
    .phpcoding{
      width: 900px; margin: 0 auto;background: #ddd;
    }
    .headeroption, .footeroption{
       background: #444; color: #fff; text-align: center; padding: 20px;
    }
    .headeroption h2, .footeroption h2{
      margin: 0;
    }
    .maincontent{
      min-height: 400px;padding: 20px;
    }
  </style>
</head>
<body>


  <div class="phpcoding">

    <section class="headeroption">
      <h2>PHP Fundamentals</h2>
    </section>

    <section class="maincontent">


    <?php

      $x = 1;

      while ($x <= 5) {
      echo "Total serize:$x<br>";
      $x++;

      }


     ?>
     <hr>
    <?php

      for ($x = 0; $x <= 5; $x++) {
      echo "Total serize:$x<br>";

      }


     ?>
     <hr>
    <?php

      $x = 1;

      do {
      echo "Total serize:$x<br>";
      $x++;
    }while ($x <= 5);

     ?>
     <hr>
     <?php
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

      foreach($age as $x => $val) {
        echo "$x = $val<br>";
      }
      ?>



    </section>



    <section class="footeroption">
      <h2>PHP Fundamentals</h2>
    </section>
  </div>







</body>
</html>
