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

$data = file_get_contents($files[2]);
print($data);
?>

<p>Respository, Center</p>

</div>
</body>

</html>