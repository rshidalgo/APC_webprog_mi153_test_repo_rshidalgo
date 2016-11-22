<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name_name = $_POST['name_name'];
 $nick_name = $_POST['nick_name'];
 $cellnum_name = $_POST['cellnum_name'];
 $homeadd_name = $_POST['homeadd_name'];
 $email_name = $_POST['email_name'];
 $gender_name = $_POST['gender_name'];
 $website_name = $_POST['website_name'];
 $comment_name = $_POST['comment_name'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name_name,nick_name,cellnum_name,homeadd_name,email_name,gender_name,website_name,user_comment) VALUES('$name_name','$nick_name','$cellnum_name', '$homeadd_name','$email_name','$gender_name','$website_name','$comment_name')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label> Database Form </label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    </tr>
    <td><input type="text" name="name_name" placeholder="name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="cellnum_name" placeholder="cellnumber" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="homeadd_name" placeholder="home address" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_name" placeholder="email" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender_name" placeholder="gender" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="comment_name" placeholder="comment" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="website_name" placeholder="website"  required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>