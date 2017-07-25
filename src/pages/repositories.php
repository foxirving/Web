<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<?php 
$dir = "../repositories";
$files = scandir($dir);
print_r($files);
?>

<p>Respository, Center</p>

</div>
</body>

</html>