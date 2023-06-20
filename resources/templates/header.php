    <header>
        <div class="top-bar">
            <p>EXP <span>(<?php echo $player_exp ?> / <?php echo $player_needed_exp ?>)</span></p>
            <progress id="m_exp_char_bar" value="<?php echo $player_exp ?>" max="<?php echo $player_needed_exp ?>"></progress>
        </div>
        <?php require "main_menu.php"; ?>
    </header>