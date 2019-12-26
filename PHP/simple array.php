
<center>
<?php

/*

$x = array( 1=> "Dhaka", 2=> "Rangpur");

$y = array("two" => "Chittagong", 3 => "Sylhet", 4 => "Khulna");

echo '<pre>';


print_r ($x + $y).'<br/>';

print_r ($y + $x);

*/


/*

$x = array(0 => "Dhaka", 1 => "Rangpur");

$y = array("Dhaka", "Rangpur");

var_dump ($x == $y);

*/

/*
// simple if else
$x = 8;

$y = 5;

if($x < $y){

echo '$x is small than $y';

}else{

echo '$x is large than $y';

}
*/

/*

// এই কোডটুকুই টেনারি অপারেটর দিয়ে দেখাতে পারেন এভাবে
$x = 2;

$y = 5;

echo ($x < $y) ? '$x is small than $y' : '$x is small than $y';
*/
/*

//এবার date() ফাংশনে দুটি প্যারামিটার দিয়ে
$tomorrow = mktime(0, 0, 0, date("m"), date("d")+1, date("y"));



echo "Tomorrow is ".date("m/d/y", $tomorrow)."<br/>";


echo date('d')."<br/>";

echo date('g,a');
*/

/*

echo 'Full textual representation of a month : ' .date('F').'<br/>';

echo 'Representation of a month, with leading zeros : ' .date('m').'<br/>';

echo 'Representation of a month, without leading zeros : ' .date('n').'<br/>';

echo 'A short textual representation of a month, three letters: '. date('M').'<br/>';

echo '24-hour format of an hour without leading zeros : '.date('g a').'<br/>';

echo 'Minutes with leading zeros : '.date('i').'<br/>';

echo 'A full numeric representation of a year, 4 digits : ' . date('Y');

*/

/*

$d=date("D");

if ($d=="Sat") {

echo "Have a nice Day";

}else{

echo "Today is not saturday";

}
*/

/*

$x = 50;
if($x == 50){
  echo "number is 50";
}elseif ($x == 40) {
  echo "number is 40";
}elseif ($x == 30) {
  echo "number is 30";
}else{
  echo "No number";
}
*/

/*
//switch statement simple program
  $number = 45;
  switch($number){

  case 45:
  echo 'The number is greater than 40';
  break;
  case 33:
  echo 'The number is 33';
  break;
  default:
  echo 'No number';
  }
*/

/*
//for loop
for ($i = 1; $i <= 10; $i++){

  echo "This result".$i.'<br>';

}
  */


/*
  //while Loop

  $i = 0;
  while($i <= 10){
    $i++;

  echo "This result is ".$i.'<br>';
}

*/
/*

//do while Loop

$i = 1;
do{
  echo "this result ".$i.'<br>';
  $i++;
}while($i <=10);

*/

/*
 for ($i=1; $i<=5; $i++):?>

<p>The number is <?php echo $i;?></p>

<?php endfor;
*/





function pyramid($hm){

for($i=1; $i<=10; $i++){

for($j=1; $j<=$i; $j++){

echo '  *  ';

}

echo '<br/>';

}

}

pyramid(5);

?>

</center>
