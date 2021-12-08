<?php 
    if(isset($_SESSION["user"])){
        include ("views/menu/menu-co.php");
    }else{
        include("views/menu/menuDeconnecte.php");
    }
?>