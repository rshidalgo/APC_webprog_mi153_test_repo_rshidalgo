<!--<DOCTYPE html>

<html lang = "en">
<head>
<style>
@charset "utf-8";
/* CSS Document */

*
{
 margin:0;
 padding:0;
}
body
{
 background:url(lastpic.jpg) no-repeat center center fixed; ;
 font-family:"Courier New", Courier, monospace;
}
#header
{
 width:100%;
 height:50px;
 background:url(lastpic.jpg) no-repeat center center fixed; ;
 color:#f9f9f9;
 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
 font-size:35px;
 text-align:center;
}
#header a
{
 color:#fff;
 text-decoration:blink;
}
body {
		font-style: italic;
		text-align: center;
		font-family: comic sans;
		font-size: 25px;
		color:white;
		}

table
{
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 color:white;
 margin-bottom:80px;
}
table a
{
 text-decoration:none;
 color:#00a2d1;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:#00a2d1;
 padding:9px 15px 9px 15px;
 color:#f9f9f9;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
</style>
</body>
</html>-->
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
Gender:
	<table>
          
		  
		  
 

	   <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" /></td>
        </tr>
		    <tr>
            <td><label for="text">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" /></td>
        </tr>
 <tr>
       <input type="radio" name="gender" value="male"> Male
	   <input type="radio" name="gender" value="female"> Female<br>       
</tr>
 	  <tr>
            <td><label for="text">Website</label></td>
         <td><input type="input" name="website" size="50" /></td>
        </tr>
		 	  <tr>
            <td><label for="text">Address</label></td>
            <td><textarea name="address" rows="10" cols="40"></textarea></td>
        </tr>
		 <tr>
            <td><label for="text">E-mail</label></td>
            <td><input type="input" name="email" size="50" /></td>
        </tr>
	
		        <tr>
            <td><label for="text">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40"></textarea></td>
        </tr>
		        
    
        
		       <tr>
            <td><label for="text">Cellphone Number</label></td>
     <td><input type="input" name="cellphone" size="50" /></td>
        </tr>
		
         
		 
		 
		 
		 
		 
		 
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="ADD TO DATABASE" /></td>
        </tr>
    </table>    
</form>
