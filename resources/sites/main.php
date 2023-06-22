<?php 

?>
<div class="row">
                <div class="col-main">
                    <div class="character">
                        <img id="main_frog" src="img/froggs/regular_frog.png" alt="">
                    </div>
                </div>
                <div>
                    <h2 class="center-title">Inventory</h1>
                    <div class="inventory">
                        <div class="item background-pixel popup" id="item_0" onmouseover="popUp('item_0_pop')" onmouseout="popOut('item_0_pop')">
                            <span class="popuptext" id="item_0_pop">
                                <?php echo $helmet_name; ?> 
                            <br> HP: <?php echo $helmet_hp; ?> 
                            <br> Siła: <?php echo $helmet_str; ?> 
                            <br> Lepkość: <?php echo $helmet_sti; ?>
                        </span>
                        </div>
                        <div class="item background-pixel popup" id="item_1" onmouseover="popUp('item_1_pop')" onmouseout="popUp('item_1_pop')">
                            <span class="popuptext" id="item_1_pop">
                                    <?php echo $armor_name; ?> 
                                <br> Zdrowie: <?php echo $armor_hp; ?> 
                                <br> Siła: <?php echo $armor_str; ?> 
                                <br> Lepkość: <?php echo $armor_sti; ?> 
                            </span>
                    </div>
                        <div class="item background-pixel popup" id="item_4" onmouseover="popUp('item_2_pop')" onmouseout="popUp('item_2_pop')">
                            <span class="popuptext" id="item_2_pop">
                                    <?php echo $weapon_name; ?> 
                                <br> Atak: <?php echo $weapon_atk_min.' / '.$weapon_atk_max ?>
                                <br> Siła: <?php echo $weapon_str; ?>  
                            </span>
                    </div>
                    </div>
                    <h2  class="center-title"><?php echo $player_name ?></h2>
                    <table class="statistics">
                        <tr>
                            <td>Zdrowie: </td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Siła: </td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Atak: </td>
                            <td><?php echo $sum_attack_min.' / '.$sum_attack_max ?></td>
                        </tr>
                        <tr>
                            <td>Lepkość: </td>
                            <td>20</td>
                        </tr>
                    </table>
                </div>
            </div>