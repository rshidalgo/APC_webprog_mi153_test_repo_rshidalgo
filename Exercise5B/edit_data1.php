<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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

 // sql query for update data into database
 $sql_query = "INSERT INTO users(name,nick,cellnum, homeadd, email, gender, comment, website ) VALUES('$name','$nick','$cellnum' , '$homeadd' , '$email' , '$gender' , '$comment' , '$website')";
 mysqli_query($con,$sql_query);
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index1.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index1.php");
}
?>

<html>
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
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" nickname="nick" placeholder="nickame" value="<?php echo $fetched_row['nick']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" cellnumber="cellnum" placeholder="cellnumber" value="<?php echo $fetched_row['cellnum']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" home address="homeadd" placeholder="Home address" value="<?php echo $fetched_row['homeadd']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" email="email" placeholder="email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" website="website" placeholder="website" value="<?php echo $fetched_row['website']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" comment="comment" placeholder="comment" value="<?php echo $fetched_row['comment']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="gender value="<?php echo $fetched_row['gender']; ?>" required /></td>
    </tr>
    <tr>
  
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>