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

$data = ffile_get_contents($dir + 'HMM.txt');
echo $data;
?>

<p>Respository, Center</p>

</div>
</body>

</html>