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
      $x = 75;
      $y = 25;

      function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

      }

      addition();
      echo $z;
      ?>
      <hr>


      <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
      ?>
      <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          Name: <input type="text" name="fname">
          <input type="submit">
        </form>

      <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
          }
        ?>
        <hr>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>




    </section>



    <section class="footeroption">
      <h2>PHP Fundamentals</h2>
    </section>
  </div>







</body>
</html>
