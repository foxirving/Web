<html>
<title>
	<link href="style.css">
</title>

<body>

<div id="center">

<p>Home, Center</p>

<img src='<?php echo '../images/MyPhoto.jpg';?>'/>

<?php
echo "<img src='../images/MyPhoto.jpg'>";
$homepage = file_get_contents('text/AboutMe.txt');
echo $homepage;
?>


</div>
</body>

</html>