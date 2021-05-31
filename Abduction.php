<h4> Thanks for submitting the form. </h4>
<?php
$host="localhost"; //Add your SQL Server host here
$user="root"; //SQL Username
$pass="*Maleekbaryor07"; //SQL Password
$dbname="Abduction"; //SQL Database Name
$con=mysqli_connect($host,$user,$pass,$dbname);

$your_first_name = $_POST['fname'];
$your_last_name = $_POST['lname'];
$your_email_address = $_POST['email'];
$your_phone_number = $_POST['Phonenumber'];
$when_it_happened = $_POST['Whenithappened'];
$when_you_were_gone_for = $_POST['Howlong'];
$how_many_you_saw = $_POST['Howmany'];
$describe_them = $_POST['Aliendescription'];
$what_they_did = $_POST['Whattheydid'];
$Sex = $_POST['Sex'];
$Others = $_POST['other'];
$sql="INSERT INTO abductiontable(First_name,Last_name,Email_address,Telephone,When_did_it_happen,How_long_were_you_gone,How_many_did_you_see,Describe_them,What_they_did_to_you,Sex,Is_there_any_other_thing) 
    VALUES('$your_first_name','$your_last_name','$your_email_address','$your_phone_number','$when_it_happened','$when_you_were_gone_for','$how_many_you_saw','$describe_them','$what_they_did','$Sex','$Others')";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);

// $to ="oluwapelumiabiodun45@gmail.com";
// $subject = "Abduction Report";
// $msg = "$your_first_name $your_last_name, \nwith the email address of $your_email_address, his phone number is 
// $your_phone_number.\nHe was abducted $when_it_happened and he saw $how_many_you_saw
// \nDescription of the Aliens: $describe_them \nHe said $what_they_did.";

//mail($to, $subject, $msg);

echo "<h2>Abduction Report </h2><br>";
echo "Your first name is -> $your_first_name.<br>";
echo "Your last name is -> $your_last_name.";
echo "Your email address is -> $your_email_address. <br>";
echo "and your phone number is -> $your_phone_number. <br>";
echo "You were abducted -> $when_it_happened. <br>";
echo "and were gone for -> $when_you_were_gone_for. <br>";
echo "You saw -> $how_many_you_saw of them. <br>";
echo "Describe them -> $describe_them. <br>";
echo "What they did to oyu -> $what_they_did.";

?>
</body>
</html>