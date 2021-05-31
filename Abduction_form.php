<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Abduction Form</title>
    <link rel="stylesheet" href="Abduction.css">
</head>


<body>
<h4><marquee>Kindly fill the form below Correcltly!</marquee></h4>

<div class="container">
  <form method="post" action="Abduction.php" target="_self">
    <u style= color:white;><h2 style= color:white; > Report an Abduction </h2></u>
       
    <label for="firstname">First name:</label><br>        
    <input type="text" id="fname" name="fname" required size="32"><br><br>
    <label for="Lastname">Last name:</label><br>
    <input type="text" id="lname" name="lname" size="32"><br><br>
    <label for="email">What is your Email Address:</label><br>
    <input type="email" id="email" name="email" required size="32"><br><br>
    <label for="Phonenumber">Telephone:</label><br>
    <input type="tel" id="Phonenumber" name="Phonenumber" required maxlength="11" size="32" placeholder="09025367782"><br><br>
    <label for="Whenithappened">When did it happen?</label><br>
    <input type="text" id="Whenithappened" name="Whenithappened" required size="32"><br><br>
    <label for="Howlong">How long were you gone?</label><br>
    <input type="text" id="Howlong" name="Howlong" required size="32"><br><br>
    <label for="Howmany">How many did you see?</label><br>
    <input type="text" id="Howmany" name="Howmany" required size="32"><br><br>
    <label for="Aliendescription">Describe them:</label><br>
    <input type="text" id="Aliendescription" name="Aliendescription" required size="32"><br><br>
    <label for="Whattheydid">What did they do to you?</label><br>
    <input type="text" id="Whattheydid" name="Whattheydid" required size="32"><br><br>
    <label for="Sex">Sex: </label><br>
    <input type="checkbox" id="Sex" name="Sex" value="Male" > 
    <label for="Male">Male </label> <br>
    <input type="checkbox" id="Sex" name="Sex" value="Female"> 
    <label for="Female">Female </label><br><br>
    <label for="other">Is there any other thing?</label><br>
    <textarea type="Message" id="other" name="other"></textarea><br><br>
    <input type="submit" name="submit" value="Report Abduction" > <input type="Reset" name="Reset" value="Reset" ><br><br>
  </form> 
</div>

</body>
</html>