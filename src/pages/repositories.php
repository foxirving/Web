<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<?php 
$dir = "repositories";
$files = scandir($dir);
echo "<p id = 'id_name'>{$files[array_rand($strings)]}</p>";
?>

<p>Respository, Center</p>

</div>
</body>

</html>