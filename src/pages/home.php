<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="home-center">

<div id="home-right">
	<p> Right </p>
</div>

<div id="home-left">
	<p> left </p>
	 <?php
	$homepage = file_get_contents('text/AboutMe.txt');
	echo $homepage;
	?>
</div>




</div>
</body>

</html>