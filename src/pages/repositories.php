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



foreach ($files as &$data) {
	if ($data != '.' || $data != '..'){
		$text = file_get_contents($dir . $data);
		?>
     	 <div id="repository-div">
       		<?php echo $text;
        ?>
   		 </div>
    	<?php
    }
}
?>



</div>
</div>
</body>

</html>