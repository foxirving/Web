<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<p>Home, Center</p>

<?php
$homepage = file_get_contents('text/AboutMe.txt');
echo $homepage;
?>


</div>
</body>

</html>