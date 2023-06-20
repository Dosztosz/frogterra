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
                            <span class="popuptext" id="item_0_pop">Hełm +6 <br> Zdrowie: + 80 <br> Siła: + 120 <br> Lepkość: + 80</span>
                        </div>
                        <div class="item background-pixel popup" id="item_1" onmouseover="popUp('item_1_pop')" onmouseout="popUp('item_1_pop')">
                            <span class="popuptext" id="item_1_pop">Zbroja +4 <br> Zdrowie: + 80 <br> Siła: + 180 <br> Lepkość: + 40</span>
                    </div>
                        <div class="item background-pixel popup" id="item_4" onmouseover="popUp('item_2_pop')" onmouseout="popUp('item_2_pop')">
                            <span class="popuptext" id="item_2_pop">Miecz +9 <br> Zdrowie: + 80 <br> Siła: + 50 <br> Lepkość: + 40</span>
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
                            <td>Moc: </td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>Lepkość: </td>
                            <td>20</td>
                        </tr>
                    </table>
                </div>
            </div>