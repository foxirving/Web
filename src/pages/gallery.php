<html>
<head>
	<link href="style.css">
</head>

<body>

<div id="center">

<div id="gallery-div">


<?php
$dir = "gallery/";

// Open a directory, and read its contents
if (is_dir ( $dir )) {
	if ($dh = opendir ( $dir )) {
		while ( ($file = readdir ( $dh )) !== false ) {
			if ($file != "." && $file != "..") {
				?>
		<div id="#image-wrapper">
     	 <img src=
       		<?php
       			echo $dir . $file;
				?>
   		  type="image/jpg"/>
   		 </div>
    	<?php
			}
		}
		closedir ( $dh );
	}
}
?>

</div>
</div>
</body>

</html>