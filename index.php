<?php
session_start();
ob_start();
if (isset($_SESSION)) {

    
}

var_dump($_SESSION["id"]);

// inclure le head
include("views/html/head.php");

// inclure le menu
include("controller/menuController.php");

// inclure le router
include("controller/router.php");

// inclure le footer
include("views/html/footer.php");
