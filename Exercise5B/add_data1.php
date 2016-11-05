<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig1.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nick = $_POST['nick'];
 $cellnum = $_POST['cellnum'];
 $homeadd = $_POST['homeadd'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $comment = $_POST['comment'];
 $website = $_POST['website'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,nick,cellnum, homeadd, email, gender, comment, website ) VALUES('$name','$nick','$cellnum' , '$homeadd' , '$email' , '$gender' , '$comment' , '$website')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index1.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick" placeholder="nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="cellnum" placeholder="cellnumber" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="homeadd" placeholder="home address" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="website" placeholder="website" required /></td>
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