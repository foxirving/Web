 <!DOCTYPE html>
<html>

 <head>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 

<body>

<h1>My first PHP page</h1>

<?php
$PageTitle ="New Page Title";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
?>

</body>
</html> 