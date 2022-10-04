<?php require "build_functions.php"; ?>


<!DOCTYPE html>
<html lang="en">
<?php require "head.php";?>
<body>
    <?php get_navbar() ?>
    <?php get_title() ?>
    <?php get_info_bar() ?>
    <?php get_menu_bar() ?>
        <div class="menu background-pixel frog_pic">
            <div class="row">
                <div class="col">
                    <img src="img/froggs/regular_frog.png" alt="">
                </div>
                <div class="col">
                    <h2>Frogteusz</h2>
                    <table>
                        <tr>
                            <td>Zdrowie</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Siła</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Moc</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Lepkość</td>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php get_footer() ?>
</html>