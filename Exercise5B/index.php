<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Website</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>
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
</div>
<div id="header1">
 <div id="content">
    <label>Database Form By Ray Hidalgo</a></label>
    </div>


<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="10"><a href="add_data.php">add data here.</a></th>
    </tr>
    
    <th>Name</th>
    <th>Nickname</th>
    <th>Cellphone Number</th>
    <th>Home address</th>
    <th>Email</th>>
    <th>Gender</th>th>
    <th>Website</th>
    <th>comment_name</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
        <td><?php echo $row[8]; ?></td>
        
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
<div>
                    Copyright Ray Hidalgo 2016
                </div>
</body>
</html>