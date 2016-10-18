<html>
<title> Web Programming_Exercise #1 </title>
<style>

body{
	background-color: 89F1FA;	
	
}

h1{
	text-decoration: underline;
	text-decoration-color: F9926C;
	text-align: center;
	font-family: century gothic;
	font-color: #F9926C;
}

h2{
	font-family: century gothic
	font-color: #F9926C
	text-align: center;

p{
	text-align: center;
	font-color: white;
	font-family: century gothic;
	font-size: 150%;
}

table, th, td{
	border: 1px solid;
	color: white;
	font-color: white;
	font-size: 25%
	font-family: century gothic;
}
</style>

			
<body>

<h1> My Home Page </h1>

<p> Hi, my name is Caryl Johanan C. Orosco. I usually let people I know call me by my first name, Caryl. </p>

<table>

	<tr>
  		<td> Hobbies: </td>
   		<td> Reading books and listening to music (+eating) </td>
  	</tr>
 
	<tr>
   		<td> Interests: </td>
    		<td> I like reading about conspiracy theories and unsolved murder cases. </td>
  	</tr>

</table>
			
<p> My favorite websites:</p>

<h2>
	<a href="http://9gag.com/">9Gag</a>
	<br><a href="http://www.youtube.com/">YouTube</a></br>
	<a href="https://www.tumblr.com/">Tumblr</a>
	<br><a href="http://creepypasta.wikia.com/wiki/Creepypasta_Wiki">Creepypasta Wiki</a></br>
</h2>

	<center><img src = "photo.jpg" alt "This is me! :)"></center>
	<br><center><img src = "jer2911.jpg" alt "One of my favorite Bible verses."></center></br>

<h1>5 Trivias About Me!</h1>

<body>

<p id="demo1">1. Your name is kinda weird, what does it mean?</p>

<button type="button" onclick="document.getElementById('demo1').innerHTML = 'Caryl means strong and Johanan means God-given. My father was the one who chose my name.'">My name means...</button>


<p id="demo2">2. What's your favorite conspiracy theory?</p>

<button type="button" onclick="document.getElementById('demo2').innerHTML = 'I loooove the conspiracy theories about the Illuminati and the Mandela Effect. Read about it on your sparetime. :)'">Favorite conspiracy theories!</button>


<p id="demo3">3. What do you REALLY want to be?</p>

<button type="button" onclick="document.getElementById('demo3').innerHTML = 'Originally, my plan was to take up Fashion Designing and be a designer someday, but my mom disapproves of it so I took up a computer course since it runs in the family. Both my parents are a graduate of Computer Science. Dad's a Software Engineer while my mom is underemployed, she works as an Executive Officer in a hospital.'">I really wanted to be...</button>	


<p id="demo4">4. What's your favorite unsolved murder case?</p>

<button type="button" onclick="document.getElementById('demo4').innerHTML = 'My favorite is the case of JonBenet Ramsey (which had a 4-hour special at CBS and IT WAS AMAZING!) and the case of Elisa Lam'">Unsolved murder?</button>	


<p id="demo5">5. Do you have a favorite band or artist?</p>

<button type="button" onclick="document.getElementById('demo5').innerHTML = 'My favorite band is Pentatonix! If you're not aware who they are (which you should be because they are such blessings to the ears) here is a link to their website: http://pentatonixthealbum.ptxofficial.com/'">Oh, yes of course!</button>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Enter your information here! :)</h1>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>  		

	