<!DOCTYPE html>
<html>

	<head>
	<style>
		html { 
		background: url(lastpic.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}
		body {
		font-style: italic;
		text-align: center;
		font-family: comic sans;
		font-size: 25px;
		color:white;
		}

		h1{
		color:black;
		text-align: center;
		}

		h2{
		color:blue;
		text-align: center;
		}

		h3{
		color:red;
		text-align: center;
		}


		P{
		color:white;

		text-align: center;
		font-family: comic sans;
		font-size: 25px;
		}
		
		div.form {
			text-align: center;
			
				border: 5px solid white;
				padding:`70px 0;
			
		}
		</style>
		<title>My Homepage </title>
		
	
	
	</head
	
	<body>
		<div id="header">
		<h1>My Website</h1>
		</div>
		<h2>Excercise</h2>
		<hr/>
		<p>My name is Ray Miguel Hidalgo. </p>
		<p>I am usually called Ray</p>
		<p>I do have a typical hobby for a college student</p>
		<p>Play games, either computer based or android based</p>
		<p>I also like multiplayer games like steam offers</p>

		<img src="image.jpg" width="200" height= "250px" alt="My Photo" />
		<br>
		<br>
		<a href="https://www.facebook.com/rayhidalgo96">Facebook</a>
		<br>
		<a href="https://twitter.com/Rmiguelhidalgo">Twitter</a>
		
		<p id="demo">what is my favorite color</p>

		<button type="button" onclick="document.getElementById('demo').innerHTML = 'Blue!'">Answer</button>

		<p id="demo1">do i like pets?</p>

		<button type="button" onclick="document.getElementById('demo1').innerHTML = 'Yes!'">Answer</button>

		<p id="demo2">What pet do I have?</p>

		<button type="button" onclick="document.getElementById('demo2').innerHTML = 'Dogs!'">Answer</button>

		<p id="demo3">How many dogs do i have?</p>

		<button type="button" onclick="document.getElementById('demo3').innerHTML = 'I Have six of them!'">Answer</button>

		<p id="demo4">Who among them you like the most?</p>

		<button type="button" onclick="document.getElementById('demo4').innerHTML = 'The labrador retriever, because it is the most expensive among them.'">Answer</button>
		
		<div class="form">
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

		<h2>PHP Form</h2>
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
		</div>
				<div>
					Copyright Ray Hidalgo 2016
				</div>

			</body>	

		</html>