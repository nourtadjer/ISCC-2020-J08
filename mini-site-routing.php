<!DOCTYPE html>
<html>
    <head>
        <title>mini-site-routing</title>
</head>

<a href="http://localhost/ISCC/Jour-08/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1" > page 1 </a>
<a href="http://localhost/ISCC/Jour-08/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2" > page 2 </a>
<a href="http://localhost/ISCC/Jour-08/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3" > page 3 </a>
</html>

<?php
   if ($_GET["page"]=="1"){
 
   echo "<h1> accueil! </h1>";
}
   elseif ($_GET["page"]=="2"){

    echo "<h1> page 2! </h1>";
}
   elseif ($_GET["page"]=="3"){

    echo "<h1> page 3! </h1>";
}
?>
