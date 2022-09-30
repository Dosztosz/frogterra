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
            <div class="row">
                <div class="statistics">
                    <div class="currency">
                        <p>Posiadasz ??? Frogonet</p>
                    </div>
                    <table>
                        <thead>
                            <th>Statystyka</th>
                            <th>Wartość</th>
                        </thead>
                        <tr>
                            <td>STR</td>
                            <td>10 (+10)</td>
                        </tr>
                        <tr>
                            <td>WIT</td>
                            <td>10 (+15)</td>
                        </tr>
                        <tr>
                            <td>LEP</td>
                            <td>10 (+1)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php get_footer() ?>
</html>