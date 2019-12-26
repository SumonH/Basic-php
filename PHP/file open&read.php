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
      PHP File opne/read/close
      <span style="float:right; color:red">
        <?php
        date_default_timezone_set('Asia/Dhaka');
        echo "Time: ".date("h:i:sa");
         ?>
      </span>
      <hr>

    <?php
      $ourfile = fopen("text.txt","r") or die("file not found");
      echo fgets($ourfile,filesize("text.txt"))."<br/>"."<br/>";
      //echo fgetc($ourfile);
      fclose($ourfile);

      ?>

      <?php
        $ourfile = fopen("text.txt","r") or die("file not found");
        while(!feof($ourfile)){
          echo fgetc($ourfile)."<br/>";
        }
        fclose($ourfile);

        ?>



    </section>



    <section class="footeroption">
      <h2>PHP Fundamentals</h2>
    </section>
  </div>







</body>
</html>
