<?php
    include "components/core.php";
    if(isset($_GET['id']) && isset($_SESSION['admin'])) {
        $id = $_GET['id'];
        $dbh->exec("DELETE FROM `products` WHERE `id` = $id");
        header("Location: Recipes.php");
    }else{
        header("Location: Recipes.php");
    }

?>