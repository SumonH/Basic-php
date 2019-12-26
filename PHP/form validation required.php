<?php
  $fonts = "verdana";
  $errname = $erremail = $errweb = $errcomment = $errgender = "";

  $name = $email = $website = $comment  =  $gender  ="";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
      $errname = "<span style='color:red'>Name is required.<span>";
    }else {
      $name     =  validate($_POST["name"]);
    }


    if (empty($_POST["email"])) {
      $erremail = "<span style='color:red'>E-mail is required.<span>";
    }else {
      $email     =  validate($_POST["email"]);
    }


    if (empty($_POST["website"])) {
      $errweb = "<span style='color:red'>Website is required.<span>";
    }else {
      $website  =  validate($_POST["website"]);
    }



    if (empty($_POST["gender"])) {
      $errgender = "<span style='color:red'>Gender is required.<span>";
    }else {
      $gender   =  validate($_POST["gender"]);
    }



  $comment  =  validate($_POST["comment"]);


  // echo "Name: ".$name. "<br>" ;
  // echo "E-mail: ".$email. "<br>" ;
  // echo "Website: ".$website. "<br>" ;
  // echo "Comment: ".$comment. "<br>" ;
  // echo "Gender: ".$gender;
  }
  function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }

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

      <form   method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <p style="color:red">* required field</p>

        <table>
          <tr>
            <td>Name </td>
            <td><input type="text" name="name" ><span style='color:red'>*<span><?php echo $errname; ?></td>
          </tr>

          <tr>
            <td>E-mail </td>
            <td><input type="text" name="email"><span style='color:red'>*<span><?php echo $erremail; ?></td>
          </tr>

          <tr>
            <td>Website </td>
            <td><input type="text" name="website"><span style='color:red'>*<span><?php echo $errweb; ?></td>
          </tr>

          <tr>
            <td>Comment </td>
            <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
          </tr>


          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" name="gender" value="female">Female
              <input type="radio" name="gender" value="male">Male<span style='color:red'>*<span><?php echo $errgender; ?>
            </td>
          </tr>


          <tr>
            <td></td>
            <td>
              <input type="submit" name="submit" value="submit">
            </td>
          </tr>
        </table>
      </form>



    </section>



    <section class="footeroption">
      <h2>PHP Fundamentals</h2>
    </section>
  </div>







</body>
</html>
