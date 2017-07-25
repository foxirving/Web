<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<p>Home, Center</p>

<img src="../images/MyPhoto.jpg" width="280" height="125" title="" alt="My Photo" />

<?php
$homepage = file_get_contents('text/AboutMe.txt');
echo $homepage;
?>


</div>
</body>

</html>