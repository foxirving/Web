<html>
<head>
	<link href="style.css">
</head>

<body>

<div id="center">

<?php
$dir = "gallery/";

// Open a directory, and read its contents
if (is_dir ( $dir )) {
	if ($dh = opendir ( $dir )) {
		while ( ($file = readdir ( $dh )) !== false ) {
			if ($file != "." && $file != "..") {
				?>
     	 <img src=
       		<?php
       			echo $dir . $file;
				?>
   		 />
    	<?php
			}
		}
		closedir ( $dh );
	}
}
?>

</div>
</body>

</html>