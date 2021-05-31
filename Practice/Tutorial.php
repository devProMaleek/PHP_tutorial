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
$myFile = fopen("testfile.txt", 'w');

//PHP WRITE TO FILE
$myFile = fopen('testfile.txt', 'w');
$txt = "Adebayo Abdulmalik\n";
fwrite($myFile, $txt);
$txt = "Adebayo Adeola";
fwrite($myFile, $txt);
fclose($myFile);

//PHP OVERWRITING
$myFile = fopen('testfile.txt', 'w');
$txt = "Oni Haleemah\n";
fwrite($myFile, $txt);
$txt = "Oni Abimbola";
fwrite($myFile, $txt);
fclose($myFile)

?>



