<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<div id="repository-center">

<div

<p>Description</p>

</div>
<?php 
$dir = "repositories/";
$files = scandir($dir);

foreach ($files as &$data) {
	if ($data != "." || $data !=  ".."){
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