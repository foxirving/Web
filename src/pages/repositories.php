<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<?php 
$dir = "repositories/";
$files = scandir($dir);
print_r($files);
echo "<p>{$files[array_rand($files)]}</p>";
?>

<p>Respository, Center</p>

</div>
</body>

</html>