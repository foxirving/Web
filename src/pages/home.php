<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<div>

</div>

<div id="homeDivRight">
	<p> Right </p>
</div>

<div id="homeDivLeft">
	<p> left </p>
	 <?php
	$homepage = file_get_contents('text/AboutMe.txt');
	echo $homepage;
	?>
</div>




</div>
</body>

</html>