<?php include_once ("header.php");?>
 
<?php include_once ("footer.php");?>
 
<!DOCTYPE html>
<html>
 <head>
 <title>mini-site-vitrine</title>
 </head> 
 

<a href="http://localhost/ISCC/Jour-05/ISCC-Jour-05/EX_02/vitrine-accueil.php"> page 1 </a>
<a href="http://localhost/ISCC/Jour-05/ISCC-Jour-05/EX_02/vitrine-contacts.php"> page 2 </a>
<a href="http://localhost/ISCC/Jour-05/ISCC-Jour-05/EX_02/vitrine-programme.php"> page 3 </a>
 

<?php
if ($_GET["Page"]=="1")
 {
 echo "<h1> Accueil! </h1>";
}
elseif ($_GET["Page"]=="2")
{
 echo "<h1> Programme! </h1>";
}
elseif ($_GET["Page"]=="3")
{
 echo "<h1> Contacts! </h1>";
}
?> 