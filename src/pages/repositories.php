<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<div id="repository-center">

<?php 
$dir = "repositories/";
$files = scandir($dir);
print_r($files);
echo "<p>{$files[2]}</p>";

$data = file_get_contents($dir . $files[2]);
echo $data;

echo "<div class=\"repository-div\"> <\div>";
?>



</div>
</div>
</body>

</html>