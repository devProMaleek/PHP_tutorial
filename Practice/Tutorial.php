<?php
//
////DATE AND TIME
//echo "Today is " . date("Y/M/d") . "<br>";
//echo "Today is " . date("Y..D") . "<br>";
//echo "Today is " . date("y-m-d") . "<br>";
//echo "Today is " . date("l") . "<br>";
//
////AUTOMATIC COPYRIGHT YEAR
//
//echo "&copy; 2010-" . date("Y") . "<br>";
//
////GET A TIME
//echo "The time is " . date("h:i:sa") . "<br>";
//echo "The time is " . date("H:i:sa") . "<br>";
//
////GET YOUR TIMEZONE
//date_default_timezone_set("Africa/Lagos");
//echo "The time is " . date("H:i:sa") . "<br>";
//
////CREATE A TIME FROM mktime()
//$d = mktime(10, 30, 45, 7, 8, 2021);
//echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
//
////CREATING A DATE FROM A STRING WITH strtotime()
//$strToTime = strtotime("10:30pm April 15 2014");
//echo "Created date is " . date("Y-m-d h:i:sa", $strToTime) . "<br>";
//
//$strToTime1  = strToTime("tomorrow");
//echo "Created date is " . date("Y-m-d h:i:sa", $strToTime1);
//
//$startDate = strtotime("Saturday");
//$endDate = strtotime("+6 weeks", $startDate);
//
//while ($startDate < $endDate){
//    echo date("M d Y", $startDate) . "<br>";
//    $startDate = strtotime("+1 week", $startDate);
//}

//PHP FILE HANDLING

//PHP readfile() FUNCTION
//echo readfile("webdictionary.txt");

// PHP OPEN FILE

//$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file");
//echo fread($myFile, filesize("webdictionary.txt"));
//fclose($myFile);

//PHP READ SINGLE LINE -fgets()
//$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file");
//echo fgets($myFile);
//fclose($myFile);

//PHP CHECK-END-OF-FILE feof()
//$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file");
//while(!feof($myFile)){
//    echo fgets($myFile) . "<br>";
//}
//fclose($myFile);

//





// PHP READ SINGLE CHARACTER - fgetc()

//$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file");
//while (!feof($myFile)){
//    echo fgetc($myFile);
//}
//fclose($myFile);
//
//

//PHP CREATE FILE
//$myFile = fopen("testfile.txt", 'w');
//
////PHP WRITE TO FILE
//$myFile = fopen('testfile.txt', 'w');
//$txt = "Adebayo Abdulmalik\n";
//fwrite($myFile, $txt);
//$txt = "Adebayo Adeola";
//fwrite($myFile, $txt);
//fclose($myFile);
//
////PHP OVERWRITING
//$myFile = fopen('testfile.txt', 'w');
//$txt = "Oni Haleemah\n";
//fwrite($myFile, $txt);
//$txt = "Oni Abimbola";
//fwrite($myFile, $txt);
//fclose($myFile)

////PHP COOKIE
//$cookie_name = "user";
//$cookie_value = "John_Doe";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
//?>
<!--<html>-->
<!--<body>-->
<?php
//if (!isset($_COOKIE[$cookie_name])){
//    echo "Cookie named '" .$cookie_name . "' is not set!";
//} else{
//    echo "Cookie '" .$cookie_name . "' is set!<br>";
//    echo "Value is: " . $_COOKIE[$cookie_name];
//}
//?>
<!---->
<!--</body>-->
<!--</html>-->
<!---->
<!--CHECK IF COOKIES ARE ENABLED-->
<?php
//setcookie("test_cookie", "test", time() + 3600, '/');
//?>
<!---->
<!--<html>-->
<!--<body>-->
<?php
// if (count($_COOKIE) > 0){
//     echo "Cookies are enabled";
// }else{
//     echo "Cookies are disabled";
// }
//
//?>
<!--</body>-->
<!--</html>-->

<!--PHP SESSIONS-->
<?php
//// Start session.
//session_start();
//?>
<!--<html>-->
<!--<body>-->
<?php
//// Set session variables
//$_SESSION['favcolor'] = "Green";
//$_SESSION['favanimal'] = "Cat";
//echo "Session variables are set";
//?>
<!--</body>-->
<!--</html>-->

<?php
//// PHP filter_var Function
//// Sanitize a string
//$str = "<h1>Hello World</h1>";
//$newStr = filter_var($str, FILTER_SANITIZE_STRING);
//echo $newStr;
//
//// Validate an integer
//$int = 100;
//
//if (!filter_var($int, FILTER_VALIDATE_INT) === false){
//    echo "Integer is valid";
//}else{
//    echo "Integer is not valid";
//}

// Validate and Sanitize an Email Address
//$email = "milikiadbay@gmail.com";
//
////Remove all illegal character from email
//$email = filter_var($email, FILTER_SANITIZE_EMAIL )

//PHP CALLBACK FUNCTION
//function my_callback($item){
//    return strlen($item);
//}
//
//$strings = ["apple", "orange", "banana", "coconut"];
//$length = array_map("my_callback", $strings);
//print_r($length);


//PHP JSON

//$age  = array("Abdulmalik" => 35000, "Adeola" => "40,000", "Adebayo" => "45,000", "devProMaleek" => 50000);
//echo json_encode($age);

//PHP Exceptions
//function divide($dividend, $divisor)
//{
//    if ($divisor == 0) {
//        throw new Exception("Division by zero");
//    }
//    return $dividend / $divisor;
//}
//    try {
//        echo divide(5, 0);
//    }
//    catch (Exception $e){
//        echo "Unable to complete process";
//    }

//PHP OBJECT ORIENTED PROGRAMMING

//Define a class
//class fruit{
//    // Properties
//    public $name;
//    public $color;
//
//    // Methods
//    function set_name($name){
//        $this->name = $name;
//    }
//    function get_name(){
//        return $this->name;
//    }
//    function set_color($color){
//        $this->color = $color;
//    }
//    function get_color(){
//        return $this->color;
//    }
//}
//
//// Define a Objects
//$apple = new fruit();
//$banana = new fruit();
//$apple->set_name("Apple");
//$banana->set_name("Banana");
//$apple->set_color("Green");
//
//echo $apple->get_name();
//echo "<br>";
//echo $banana->get_name();
//echo "<br>";
//echo $apple->get_color();

//PHP OOP CONSTRUCTOR

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit('Apple', 'Red');
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();