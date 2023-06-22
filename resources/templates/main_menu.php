<?php
    
    if(isset($_GET['site'])){
        $site = $_GET['site'];
        switch ($site){
            case "fight":
                $fight = "active";
            break;
            case "mission":
                $missions = "active";
            break;
            case "settings":
                $settings = "active";
            break;
        }
    }
    else{
        $main = "active";
    }
?>


<nav>
    <ul>
        <a href="index.php"><li class="<?php echo $main ?>">Strona Postaci</li></a>
        <a href="?site=mission"><li class="<?php echo $missions ?>">Misje</li></a>
        <a href="?site=fight"><li class="<?php echo $fight ?>" >Walka</li></a>
        <a href="#"><li class="<?php echo $settings ?>">Ustawienia</li></a>
    </ul>
</nav>