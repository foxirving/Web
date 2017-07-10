 <!DOCTYPE html>
<html>

 <head>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 

<body>

<h1>My first PHP page</h1>

<?php
$PageTitle ="New Page Title";

function customPageHeader(){ ?>
  <h1> "HEADER RIGHT HERE" </h1>
<?php }
include_once('header.php');

function customPageFooter(){ ?>
	<h1> "FOOTER RIGHT HERE" </h1>
<?php }
include_once('footer.php');
?>

</body>
</html> 