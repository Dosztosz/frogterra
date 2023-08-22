<?php

    if($player_exp >= $player_exp_needed){
        $player_exp_current = $player_exp - $player_exp_needed;
        $player_exp = $player_exp_current;
        $player_exp_needed = $player_exp_needed * 1.5;
        $player_lvl = $player_lvl + 1;

        $sql = "UPDATE players_lvl
        SET player_exp=$player_exp, player_exp_needed=$player_exp_needed, player_lvl=$player_lvl
        WHERE player_id = 1";

        if ($conn->query($sql) === TRUE) {
            
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }




?>