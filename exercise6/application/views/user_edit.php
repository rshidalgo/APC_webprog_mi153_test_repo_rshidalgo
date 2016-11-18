<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>User</title> 

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
   width: 450px;
   height: 560px;
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

      <form method = "" action = "">
		
         <?php 
            echo form_open('user_controller/update_user'); 
            echo form_hidden('old_user_id',$old_user_id); 

            echo form_label('user_id'); 
            echo form_input(array('id'=>'user_id',
               'name'=>'user_id','value'=>$records[0]->user_id)); 
            echo "<br/>"; 
				
            echo form_label('nickname'); 
            echo form_input(array('id'=>'nickname','name'=>'nickname',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('email'); 
            echo form_input(array('id'=>'email','name'=>'email',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('hadd'); 
            echo form_input(array('id'=>'hadd','name'=>'hadd',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('gender'); 
            echo form_input(array('id'=>'gender','name'=>'gender',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('cpnum'); 
            echo form_input(array('id'=>'cpnum','name'=>'cpnum',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('comment'); 
            echo form_input(array('id'=>'comment','name'=>'comment',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
				
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
      </div>
   </body>
	
</html>