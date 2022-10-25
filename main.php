<!DOCTYPE html>
<html lang="en">
<?php require "head.php";?>
<body>
    <?php include('resources/templates/navbar.php') ?>
    <?php include('resources/templates/title.php') ?>
    <?php include('resources/templates/info_bar.php') ?>
    <?php include('resources/templates/menu.php') ?>
        <div class="menu background-pixel frog_pic">
            <div class="row">
                <div class="col-main">
                    <div class="character">
                    <img id="main_frog" src="img/froggs/regular_frog.png" alt="">
                    </div>
                    <div class="apperiance-bar">
                        <div class="apperiance background-pixel" id="green" onclick="changeFrog('green')">Green</div>
                        <div class="apperiance background-pixel" id="pink" onclick="changeFrog('pink')">Pink</div>
                        <div class="apperiance background-pixel" id="blue" onclick="changeFrog()">Blue</div>
                        <div class="apperiance background-pixel" id="violet" onclick="changeFrog()">Violet</div>
                    </div>
                </div>
                <div class="col-exp ">
                        
                    <h2 class="center-title">Inventory</h1>
                    <div class="inventory">
                        <div class="item background-pixel" id="item_0"></div>
                        <div class="item background-pixel" id="item_1"></div>
                        <div class="item background-pixel" id="item_2"></div>

                        <div class="item background-pixel" id="item_3"></div>
                        <div class="item background-pixel" id="item_4"></div>
                        <div class="item background-pixel" id="item_5"></div>

                        <div class="item background-pixel" id="item_6"></div>
                        <div class="item background-pixel" id="item_7"></div>
                        <div class="item background-pixel" id="item_8"></div>
                    </div>
                    <h2  class="center-title">Frogteusz</h2>
                    <table>
                        <tr>
                            <td>Zdrowie: </td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Siła: </td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Moc: </td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Lepkość: </td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php include('resources/templates/footer.php') ?>
</html>