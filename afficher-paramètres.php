<html>
<a href="http://localhost/ISCC/Jour-08/ISCC-2020-J08/EX_01/afficher-param%c3%a8tres.php"> <?php $_GET?></a>
</html>

<?php
    foreach ($_GET as $key => $value ){
     echo "<ul>";
     echo "<li>"; 
     echo "cle :"  .  $key .  "valeur :"  .  $value;
     echo "</li>";
     echo "</ul>";
}    
?> 