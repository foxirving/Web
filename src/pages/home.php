<html>
<title>
	<link href="style.css">
</title>

<body>


<div id="center">

<div id="home-center">

<div id="home-left">
	<center>
	<img alt="My Photo" src="images/MyPhoto.jpg">
	</center>
	
	 <?php
	$homepage = file_get_contents('text/AboutMe.txt');
	echo $homepage;
	?>
</div>

<div id="home-right">
	<p> Right </p>
</div>



</div>


</div>
</body>

</html>