var hp = 100;
var enemyHp = 100;

var enemyAttackPower = 10;




function Attack(attack){
    if(hp > 0 && enemyHp > 0){
        playerAttack(attack);
        setTimeout(function(){enemyAttack();},750);
        setTimeout(function(){document.getElementById("m_char").classList.remove("get-hit");document.getElementById("e_char").classList.remove("get-hit");},2000);
        setTimeout(function(){Attack(attack);},2500);
    }
    else if(hp < 0){
        $('.battle-arena').html('<h1>Przegrałeś</h1>');
    }
    else if(enemyHp < 0){
        $('.battle-arena').html('<h1>Wygrałeś</h1>');
    }

}

function playerAttack(attack){
    let e_health_bar = document.getElementById("e_char_bar")
    m_char_attack = Math.floor(Math.random()*attack+1)
    enemyHp = enemyHp - m_char_attack;
    e_health_bar.value -= m_char_attack;
    document.getElementById("e_char").classList.add("get-hit");
    document.getElementById("e_char_damage").innerHTML = m_char_attack;
}

function enemyAttack(){
    let m_health_bar = document.getElementById("m_char_bar")
    e_char_attack = Math.floor(Math.random()*enemyAttackPower+1)
    hp = hp - e_char_attack;
    m_health_bar.value -= e_char_attack;
    document.getElementById("m_char").classList.add("get-hit");
    document.getElementById("m_char_damage").innerHTML = e_char_attack;
}

function damageGenerator(min, max){
    var damage = Math.floor(Math.random() * (max-min)+min);
}
