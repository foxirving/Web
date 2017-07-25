 <!DOCTYPE html>
<html>

 <head>
 <title> Fox Irving </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 

<body>

<!-- Page Header -->
<?php
include_once('header.php');
include_once('home.php');
?>

<?php 
error_reporting(E_ALL ^ E_NOTICE); 
function open_page($string){
    if (preg_match("/^[a-zA-Z]+$/", $string)){
        $string = $string;
    }else{ 
        $string = "";
    }
    return $string;
}
$page = open_page($_GET['page']);
if ($page){
    $file = "pages/".$page.".php";
if (file_exists($file)){
    $pagename = $page;
}else{
    $pagename = "404";
}
include("pages/".$pagename.".php");
}else{
}

include_once('footer.php');
?>


</body>
</html> 