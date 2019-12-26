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
      <hr>
      PHP Advance Filter
      <span style="float:right; color:red">
        <?php
        date_default_timezone_set('Asia/Dhaka');
        echo "Time: ".date("h:i:sa");
         ?>
      </span>
      <hr>

      <?php

      $intnum = 100;
      $min = 1;
      $max = 200;
      if (filter_var ($intnum, FILTER_VALIDATE_INT,
      array("options" => array(
        "min_range" =>$min,
       "max_range"=>$max)))){
      echo "It is valid range"."<br/>"."<br/>";
    }else {
      echo "It is not valid range"."<br/>"."<br/>";
    }

        ?>

        <hr>

        <?php

          $url = "http://www.facebook.com/index.html?q=123";
          if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
            echo "This url is vald";
          }else {
            echo "It has not query string";
          }

         ?>



    </section>



    <section class="footeroption">
      <h2>PHP Fundamentals</h2>
    </section>
  </div>







</body>
</html>
