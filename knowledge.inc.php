<?php
if (!empty($_POST["firstVariable"])) {
  $x = $_POST["firstVariable"];
} else {
    $x=0;
  } 

if (!empty($_POST["secondVariable"])) {
  $y = $_POST["secondVariable"];
} else {
    $y=0;
  }  

echo "$x+$y= " . $x+$y;
?><br>

<?php
echo "'$x'+'$y'= " . "$x","$y"; 
?><br>

<?php
echo '($y=$y*$x)=($y*=$x)= ' . $y*=$x;
?><br>

<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = &$x;

  if($price >= 15 && $price <= 20)
      $d = "$price - это число находится между 15 и 20";
      else $d= "$price - это число не из интервала 15-20"
?><br>


