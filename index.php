<?php
 session_start(); 
    $player_id = 1;
    $player_lvl = 10;
    $player_name = "Dosztosz";
    $player_exp = 1954;
    $player_needed_exp = 2000;
    $database_connect;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "resources/config/head.php"; ?>
</head>
<body>
    <?php require "resources/templates/header.php"; ?>
<div class="container">
    <div class="main">
        <?php require "resources/templates/sidebar.php"; ?>
        <div class="menu background-pixel">
            <?php 
                if(isset($_GET['site'])){
                    $site = $_GET['site'];

                    switch ($site){

                        case "fight":
                            
                            require_once "resources/sites/fight.php";
                        break;

                        case "mission":
                            
                            require_once "resources/sites/missions.php";
                        break;
                    }
                }
                else{
                    require_once "resources/sites/main.php";
                }


            ?>
            <?php require_once "resources/templates/tips.php"; ?>
        </div>
    </div>
</div>

</body>
</html>