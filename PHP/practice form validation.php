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
      PHP Form Validation
      <hr>

      <form  method="POST" action=" <?php echo htmlspecialchars ($_SERVER['PHP_SELF']) ?> ">

        <table>
            <tr>
              <td>Name</td>
              <td><input type="text" name="name"></td>
            </tr>

            <tr>
              <td>E-mail</td>
              <td><input type="text" name="email"></td>
            </tr>

            <tr>
              <td>Website</td>
              <td><input type="text" name="website"></td>
            </tr>

            <tr>
              <td>Comment</td>
              <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>
                <input type="radio" name="gender"value="female">female
                <input type="radio" name="gender"value="male">Male
              </td>
            </tr>

            <tr>
              <td></td>
              <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>

      </form>


    <?php
      $name = $email = $website = $comment  =  $gender  ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name    = validate($_POST["name"]);
       $email   = validate($_POST["email"]);
       $website = validate($_POST["website"]);
       $comment = validate($_POST["comment"]);
       $gender  = validate($_POST["gender"]);


       echo "Name = ".$name."<br>"  ;
       echo "E-mail = ".$email."<br>";
       echo "Website = ".$website."<br>";
       echo "Comment = ".$comment."<br>";
       echo "Gender = ".$gender;
}

      function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


     ?>


    </section>



    <section class="footeroption">
      <h2>PHP Fundamentals</h2>
    </section>
  </div>







</body>
</html>
