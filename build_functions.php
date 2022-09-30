<?php
function get_navbar(){
    echo '
    <div class="infos">
        <ul>
            <li>Witaj: <a href="">Dosztosz</a></li>
            <li>Ranking: <a href="">(1)</a></li>
            <li>Znajomi: <a href="">(2) online</a></li>
            <li><a href="">Ustawienia</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Wyloguj</a></li>
        </ul>
    </div>';
}
function get_title(){
    echo '
    <div class="title">
        <h1>Frogterra</h1>
        <p>Frog ventures</p>
    </div>';
}
function get_info_bar(){
    echo'<div class="container head-space">
    <div class="hp-bar background-pixel">
        <ul>
            <li><a href="#">Nazwa Żaby</a></li>
            <li><a href="#">Masz <span>1</span> Nowych Wiadomości</a></li>
            <li><a href="#">( <span>1</span> ) Handel</a></li>
            <li><a href="#">Forum</a></li>
        </ul>
    </div>
</div>';
}
function get_menu_bar(){
    echo'
    <div class="container">
        <div class="main">
            <div class="navbar background-pixel">
                <ul>
                    <a href="main.php"><li>Mapa</li></a>
                    <a href="misje.php"><li>Misje</li></a>
                    <a href="#"><li>Surowce</li></a>
                    <a href="#"><li>Żaba</li></a>
                    <a href="#"><li>Ustawienia</li></a>
                </ul>
            </div>';
}
function get_footer(){
    echo'
    </div>
    </div>

</body>';
}









?>