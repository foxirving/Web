<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<div id="repository-center">

<center>

<div

<p id="repository-div" margin="20px">Description</p>

</div>

<?php
$dir = "repositories/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    	if ($file != "." && $file != ".."){
    	$text = file_get_contents($dir . $file);
    	?>
     	 <div id="repository-div">
       		<?php echo $text;
        ?>
   		 </div>
    	<?php
    	}
   	}
   closedir($dh);
  }
}
?>

</center>

</div>
</div>
</body>

</html>