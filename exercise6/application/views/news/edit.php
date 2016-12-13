<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Website</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<
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

        //<img src="image.jpg" width="200" height= "250px" alt="My Photo" />
        <img src="<?php echo base_url('exercise6/image.jpg'); ?>" />
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
<h2><?php echo $name; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['user_id']); ?>
<td><label for="text">Gender</label></td>   
   <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $news_item['name'] ?>" /></td>
        </tr>
        
		
		<tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" value="<?php echo $news_item['nickname'] ?>"/></textarea></td>
        </tr>
		   <tr>
            <td><label for="address">Address</label></td>
            <td><input type="input" name="address" size="150" value="<?php echo $news_item['address'] ?>"/></textarea></td>
        </tr>
		 <tr>
		 
		<tr>
                  <input type="radio" name="gender" value="male"> Male
	   <input type="radio" name="gender" value="female"> Female<br> 
		 </tr>
		 
		 <tr>
           
		   <td><label for="website">Website</label></td>
<td><input type="input" name="website" size="50" value="<?php echo $news_item['website'] ?>"/></textarea></td>
        </tr>
		 
		   
            <td><label for="email">Email</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $news_item['email'] ?>"/></textarea></td>
        </tr>
		 <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40" value="<?php echo $news_item['comment'] ?>"/></textarea></td>
        </tr>
		 <tr>
            <td><label for="cellphone">Cellphone</label></td>
            <td><input type="input" name="cellphone" size="50" value="<?php echo $news_item['cellphone'] ?>"/></textarea></td>
        </tr>
		
		
		
		<tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>