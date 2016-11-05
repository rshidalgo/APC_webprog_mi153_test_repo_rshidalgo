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
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data1.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index1.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>


<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data1.php">add data here.</a></th>
    </tr>
    <th>Name</th>
    <th>Nickname</th>
    <th>cellnum</th>
    <th>home address</th>
    <th>email</th>
    <th>gender</th>
    <th>website</th>
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
</body>
</html>