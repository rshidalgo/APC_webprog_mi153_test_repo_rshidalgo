<head>
<title>My Site</title>

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
	
	
<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">

</style>

</head>



         

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

<h1 align="center">This is My Story.<h1>

<br>
<center>
<img src="<?php echo base_url('css/uploads/isa.png')?>" width ="280" height ="280" />


<p>
<strong>Hello my name is Rafael <strong> <br>
Welcome to my site.<br>
Explore more to know me better.<br>
<br>
</center>
</p>

</div>
</body>
</html>