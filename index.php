<?php
 session_start(); 
    $player_needed_exp = 100;
require "resources/config/config.php";
// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT players.player_username, 
        players_lvl.player_exp, players_lvl.player_lvl, 
        helmets.helmet_name, helmets.helmet_hp, helmets.helmet_str, helmets.helmet_pow, helmets.helmet_sti,
        armors.armor_name, armors.armor_hp, armors.armor_str, armors.armor_sti,
        weapons.weapon_name, weapons.weapon_str, weapons.weapon_atk_min, weapons.weapon_atk_max

        FROM players
        INNER JOIN players_lvl ON players.player_id=players_lvl.player_id 
        INNER JOIN players_eq ON players_eq.player_id = players.player_id
        INNER JOIN helmets ON players_eq.helmet_id = helmets.helmet_id
        INNER JOIN armors ON players_eq.armor_id = armors.armor_id
        INNER JOIN weapons ON players_eq.weapon_id = weapons.weapon_id
        WHERE players.player_id = 1 
        ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) { 
    
    $player_exp = $row["player_exp"]; 
    $player_name = $row["player_username"];
    $player_lvl = $row['player_lvl'];
    $helmet_name = $row['helmet_name'];
    $helmet_hp = $row['helmet_hp'];
    $helmet_str = $row['helmet_str'];
    $helmet_pow = $row['helmet_pow'];
    $helmet_sti = $row['helmet_sti'];
    $armor_name = $row['armor_name'];
    $armor_hp = $row['armor_hp'];
    $armor_str = $row['armor_str'];
    $armor_sti = $row['armor_sti'];
    $weapon_name = $row['weapon_name'];
    $weapon_atk_min = $row['weapon_atk_min'];
    $weapon_atk_max = $row['weapon_atk_max'];
    $weapon_str = $row['weapon_str'];
    

    $sum_attack_min = ceil(($helmet_str + $armor_str + $weapon_str )*1.2 + $weapon_atk_min);
    $sum_attack_max = ceil(($helmet_str + $armor_str + $weapon_str )*1.2 + $weapon_atk_max);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "resources/config/head.php"; ?>
</head>
<body>
    <?php
if ($result->num_rows > 0) {
    // output data of each row



?>
    
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
<?php 
} else {
    echo "0 results";
  }

$conn->close(); ?>
</html>