<html>
<title>
	<link href="style.css">
</title>

<body>


<div id="center">

<div id="home-center">

<div id="home-left">
	<p> left </p>
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