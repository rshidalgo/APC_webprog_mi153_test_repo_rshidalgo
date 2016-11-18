<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 

<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>



<style>

h1{
font-family:impact;
font-size:50px;
align:center;
}

p{
font-family:comic sans ms;
font-size:25px;
align:center;
}


.hello{
font-size:30px;
}

#prof{
   width: 1040px;
   height: 800px;
   background: rgba(0,0,0,0.1);
   padding: 5px;
   color: black;
   margin: auto;
   margin-top: 5px;
   margin-bottom: 5px;
   text-align: center;
}


   ul{padding:1px;overflow:hidden;list-style-type:none;margin:0;background-color:"#151515";z-index:0;}
   li img{padding:0px;float:left;z-index:0;}
   li a{color:black;padding:10px;float:right;text-decoration:none;font-family: Impact;font-size:30px;z-index:0;}
   li a:hover{background-color:white;color:black;font-size:33px;}
   
</style>




   </head>

	
   <body> 

   <ul>
   <li> <img src="<?php echo base_url('css/uploads/log.png')?>" width ="150" height ="100" /></li>
<li><a href = "<?php echo base_url(); ?>index.php/user/add_view">Form</a></li>
<li><a href="<?php echo base_url('index.php/mypage/trivia')?>" target="_self">Trivia</a></li>
<li><a href="<?php echo base_url('index.php/mypage/works')?>" target="_self">Works</a></li>
<li><a href="<?php echo base_url('index.php/mypage/sites')?>" target="_self">Sites</a></li>
<li><a href="<?php echo base_url('index.php/mypage/about')?>" target="_self">About Me</a></li>
<li><a href="<?php echo base_url('index.php/mypage/index')?>" target="_self">Home</a></li>
</ul>


<div id="prof">
<br>
<br>
<br>
      <a href = "<?php echo base_url(); ?>index.php/user/add_view">Add</a>
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>User#</td>"; 
            echo "<td>user_id</td>"; 
            echo "<td>name</td>"; 
			echo "<td>nickname</td>";
			echo "<td>email</td>";
			echo "<td>hadd</td>";
			echo "<td>gender</td>";
			echo "<td>cpnum</td>";
			echo "<td>comment</td>";
			
			
			
			
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->name."</td>"; 
			      echo "<td>".$r->nickname."</td>"; 
			      echo "<td>".$r->email."</td>"; 
			      echo "<td>".$r->hadd."</td>"; 
			      echo "<td>".$r->gender."</td>"; 
			      echo "<td>".$r->cpnum."</td>"; 
			      echo "<td>".$r->comment."</td>"; 
               echo "<td><a href = '".base_url()."index.php/user/edit/"
                  .$r->user_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/user/delete/"
                  .$r->user_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
</html>