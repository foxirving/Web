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
<?php }
include_once('header.php');

function customPageFooter(){ ?>
<?php }
include_once('footer.php');
?>

</body>
</html> 