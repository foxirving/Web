<html>
<head>
	<link href="style.css">
</head>

<body>


<div id="center">

<div id="home-center">

<div id="home-left">
	
	<img alt="My Photo" src="images/MyPhoto.jpg">
	<br>	
	<a href="https://github.com/foxirving">GitHub</a>
	<a href="https://www.linkedin.com/in/amy-irving-06732b100/">LinkedIn</a>
	
</div>

<div id="home-right">
	<?php
	$homepage = file_get_contents('text/AboutMe.txt');
	echo $homepage;
	?>
</div>



</div>


</div>
</body>

</html>