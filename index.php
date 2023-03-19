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