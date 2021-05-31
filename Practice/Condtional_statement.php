<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statement</title>
</head>
<body>
<?php
// If statements.
$t = date("H");
echo "<br>";
echo $t. "<br>";


if ($t < "20") {
    echo "Have a good day!  <br>";
}
//If.. else statement.
$d = date("H");
echo $t."<br>";

if ($t < "20") {
    echo "Have a good day!". "<br>";
}
else {
    echo "Have a good night!";
}
// If.. elseif.. else statement
$time = date("H");
echo $t."<br>";
if ($time < "10"){
    echo "Have a good morning"."<br>";
} elseif ($time < "20"){
    echo "Have a good day"."<br>";
} else{
    echo "Have a good night";
}  

// Switch statement
$fav_color = "red";
switch ($fav_color) {
    case 'red':
        echo "Your favourite color is red";
        break;
    case 'blue':
        echo "Your favourite color is blue";
        break;
    case 'green':
        echo "Your favourite color is green";
        break;
    default:
        echo "Your favourite color is neither red, blue, nor green";
}

// Loops
// While loop

$x = 1;
while($x <= 10){
    echo "The number is: $x <br>";
    $x++;
}

$x = 0;
 
while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}

// Do while loop
$y = 1;
do {
    echo "The number is: $y <br>";
    $y++;
}
while ($y <= 5);
// For loop
for ($x = 0; $x <= 100; $x+=10){
    echo "The number is: $x <br>";
}
// Foreach loop

$colors = array("red", "blue", "green", "yellow");
foreach($colors as $value){
    echo "$value <br>";
}

$age = array("Abdulmalik"=>"30", "Adebayo"=>"25", "Adeola"=>"23");
foreach ($age as $name=>$value){
    echo "$name=$value<br>";
}
?>
    
</body>
</html>