<html>

<head>
<title>GlassCount</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<br/><br/>
<h1>GlassCount</h1>
<h2>
	<?php
	$count = file_get_contents("count.txt");
	$count = intval($count);
	$numusers = file_get_contents("numusers.txt");
	$numusers = intval($numusers);
	
	$avgcount = $count / $numusers;
	$avgcount = round($avgcount);
	
	echo $count . " Explorers seen <p style=\"display:inline-block;\">in total</p>";
	echo "<br/>";
	echo $avgcount . " Explorers seen <p style=\"display:inline-block;\">on average</p>";
	?>
</h2>
<br/>
<h3>See <a href="http://github.com/tomthecarrot/glasscount" target="_blank">the GitHub page</a> for more information.</h3>
</body>

</html>