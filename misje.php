<?php require "build_functions.php"; ?>


<!DOCTYPE html>
<html lang="en">
<?php require "head.php";?>
<body>
    <?php get_navbar() ?>
    <?php get_title() ?>
    <?php get_info_bar() ?>
    <?php get_menu_bar() ?>
        <div class="menu background-pixel">
            <ul>
                <li>
                    <div class="mission" id="1">
                        <div class="row">
                            <div class="col-main">
                                <span>Ostatnio potężne krowy atakują nasze stawiki. Pokonaj waleczne krowy aby zapewnić nam bezpieczeństwo</span>
                            </div>
                            <div class="col-exp">
                                <p>Poziom Trudności: Niski</p>
                                <p>Nagroda: <span style="color: red;">1000 xp</span></p>
                                <button onclick="dissapear(1)">Wyruszaj</button>
                            </div>
                        </div>
                    </div>
                </li>
                <li><div class="mission">
                        <div class="row">
                            <div class="col-main">
                                <span>Ostatnio potężne krowy atakują nasze stawiki. Pokonaj waleczne krowy aby zapewnić nam bezpieczeństwo</span>
                            </div>
                            <div class="col-exp">
                                <p>Poziom Trudności: Średni</p>
                                <p>Nagroda: <span style="color: red;">2137 xp</span></p>
                                <button onclick="dissapear(1)">Wyruszaj</button>
                            </div>
                        </div>
                    </div></li>
                <li><div class="mission">
                        <div class="row">
                            <div class="col-main">
                                <span>Ostatnio potężne krowy atakują nasze stawiki. Pokonaj waleczne krowy aby zapewnić nam bezpieczeństwo</span>
                            </div>
                            <div class="col-exp">
                                <p>Poziom Trudności: Wysoki</p>
                                <p>Nagroda: <span style="color: red;">1000 xp</span></p>
                                <button onclick="dissapear(1)">Wyruszaj</button>
                            </div>
                        </div>
                    </div></li>
            </ul>
        </div>
    <?php get_footer() ?>
</html>