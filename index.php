<head>
	<title>Readsubs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
*
{
	margin:0;
	padding:0;
	
}

body
{
	background-color:black;
	color:white;
	text-align:center;
	font-size:24px;
}

h1
{
	font-size:64px;
}

a:link,a:visited,a:hover,a:active
{
	background-color:black;
	color:white;
	text-decoration:none;
}
</style>
	
<center>
</head>
<body>
<h1><a href="./">Readsubs</a></h1>
<?php
if(!empty(isset($_POST['ip'])))
{
	$ip = $_POST['ip'];
	
	$lines = explode("\n",$ip);
	
	echo "<div style=\"border-style: dashed;width:50%;\">";
	for($line = 0; $line < count($lines); $line++)
	{
		if(is_numeric(trim($lines[$line])))
		{
			$line += 1;			
			continue;
		}
		else if(empty(trim($lines[$line])))
			continue;
		else
		{
			echo "<span style=\"color:rgba(".rand(64,255).",".rand(64,255).",".rand(64,255).",100%);\">".htmlspecialchars(trim($lines[$line]))."</span><br>";
		}
	}
	echo "</div></body>";
}
else
{
?>
<form method="POST">
<textarea id="ip" name="ip" rows=16 cols=64 style="background-color:black;color:white" placeholder="Paste subtitles here...">
</textarea>
<br>
<input type="submit" value="Read" class="btn btn-success">
</form>
</body>
<?php 
}
?>