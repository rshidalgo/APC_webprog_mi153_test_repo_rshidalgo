<html>
<head>
<title>My Site</title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
<style>


h1{
font-family:impact;
font-size:40px;
align:center;
}



#works{
font-family:comic sans ms;
font-size:28px;
text-align:center;
}

#eto{
	width: 1000px;
	height: 1600px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	font-family:comic sans ms;
	font-size:25px;}


table, th, td {
    border: 5px ridge black;
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

	</br>
</br>
</br>
</br>
<div id="eto">
<center>
<h1>Rafael and his works</h1>

<p id="works">His favorite works: </p>
		<table>
		
		<tr>
			<th>work</th>
			<th> image</th>
		</tr>
		
		<tr>
			<td>Unleash within</td>
			<td><img src="<?php echo base_url('css/uploads/red.jpg')?>" width ="300" height ="250" /></td>
		</tr>
		
		<tr>
			<td>Glitch</td>
			<td><img src="<?php echo base_url('css/uploads/glitch.jpg')?>" width ="300" height ="350" /> </td>
		</tr>
		
		<tr>
			<td>Broken</td>
			<td><img src="<?php echo base_url('css/uploads/broken.png')?>" width ="300" height ="250" /></td>
		</tr>
		
		<tr>
			<td>When Light strikes</td>
				<td><img src="<?php echo base_url('css/uploads/light.jpg')?>" width ="300" height ="250" /></td>
		</tr>
		
		</table>
	
</div>
</body>
</html>