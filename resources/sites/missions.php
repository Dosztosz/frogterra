<script>

CountDownTimer('<?php echo $mission_time ?>', 'countdown');

function CountDownTimer(dt, id)
{
    var end = new Date(dt);

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById(id).innerHTML = 'WALKA!';
            document.getElementById("mission_time").submit();


            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById(id).innerHTML = days + 'days ';
        document.getElementById(id).innerHTML += hours + 'hrs ';
        document.getElementById(id).innerHTML += minutes + 'mins ';
        document.getElementById(id).innerHTML += seconds + 'secs';
    }

    timer = setInterval(showRemaining, 1000);
}

</script>

<?php if($mission_status == "ongoing"){
    echo '<div class="countdown-div">
            <h1>Do końca misji pozostało:</h1>
            <div id="countdown"></div>
            <form name="mission_time" action="fight.php?fight=10" method="post" id="mission_time">
                <input type="hidden" name="countdown">
            </form>
            </div>';
}
else{
    echo '<ul>
    <li>
        <div class="mission" id="1">
            <div class="row">
                <div class="col-main">
                    <span>Ostatnio potężne krowy atakują nasze stawiki. Pokonaj waleczne krowy aby zapewnić nam bezpieczeństwo</span>
                </div>
                <form action="" method="post">
                    <div class="col-exp">
                        <p>Poziom Trudności: Niski</p>
                        <p>Nagroda: <span style="color: red;">1000 xp</span></p>
                        <input type="hidden" name="mission" value="<?php echo $mission_id ?>">
                        <button onclick="dissapear(1)" type="submit">Wyruszaj</button>
                    </div>
                </form>
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
</ul>';
} ?>

