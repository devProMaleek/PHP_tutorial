
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Web Page</title>
</head>
<body>
    <h1>My First Php Page</h1>
<?php 
    echo "Hello World<br>";
    ECHO "Hello World<br>";
    Echo "Hello world<br>";
    $color = "red";
    var_dump($color);
    echo "My car is " .$color. "<br>";
    echo "My car is $color";
    //echo "My house is ".$COLOR."<br>";
    //echo "My boat is ".$coLOR."<br>";
    # Variables
    $txt = "w3schools";
    print "I love $txt";
    function myTest() { 
        static $x = 0;
        echo $x;
        $x++;
    }
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
?>

<?php
echo "<h2>PHP is fun</h2>";
echo "Hello world<br>";
echo "I am about to learn Php<br>";
echo "This ", "string ", "was ", "made ", "with multiple statement";
// Print statement
print "<h2>PHP is fun</h2>";
print "Hello world!<br>";
print "I am about to learn Php";
// Array datatype
$cars = array("Lexus","Acura", "Toyota","Honda")
?>

<?php
// Object and class datatype.
echo "<h2> Object and class Datatype</h2>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a ".$this->color. " " .$this->model. "!";
    }
}

$myCar = new Car("black", "Lexus");
echo $myCar -> message();
echo "<br>";

$myCar = new Car("red", "Benz");
echo $myCar -> message();

// Null datatype
$x = "Hello world";
$x = NULL;
var_dump($x);
?>

<?php
# PHP Strings
// stren(): Return the length of a string
$string = "My name is Abdulmalik.I'm learning PHP";
echo strlen($string);
// str_word_count(): Counts the word in a string
echo "<br>";
echo str_word_count($string);
// strrev(): Reverses a string
echo "<br>";
echo strrev($string);
// strpos(): Searches a text within a string.
echo "<br>";
print strpos($string, "learning");
// str_replace: Replaces text within a string.
echo "<br>";
echo str_replace("learning", "studying", $string);
echo "<br>";

// PHP Numbers
$y = 5;
var_dump(is_int($x));

#PHP Constant
// Create a php constant
define("GREETING", "You are welcome to Cheth");
echo GREETING;
echo "<br>";
// PHP CONSTANT ARRAY
define("cars", ["Toyota", "Lexus", "Acura", "Honda", "Benz"]);
echo cars[3];
echo "cars[0] <br>" ;
echo "<br>";


// PHP Functions
function writemsg() {
    echo "Hello World <br>";
}
// Calling the function
writemsg();

function familyname($fname){
    echo "$fname Refsnes. <br>";
}
familyname("Adeola");
familyname('Abdulmalik');
familyname('Adedamola');
// Strict declaration
function addnumbers(int $a, int $b){
    echo $a + $b;
}
addnumbers(5, 10);
addnumbers(7, 6);
// Default argument value
function setheight(int $minheight=50){
    echo "The height is: $minheight <br>";
}
setheight(350);
setheight();
?>

</body>
</html>