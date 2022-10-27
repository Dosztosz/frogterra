

function schowaj(){
    $("#1").fadeOut(500);
}

function dissapear(mission){
    var missionNumber = mission;
    schowaj();
    
}

function colorFrog(){
    $('#main_frog').fadeOut(500);
    setTimeout(function(){$('#main_frog').attr('src', 'img/froggs/'+frog+'');}, 500);
    $('#main_frog').fadeIn(500);
}



function changeFrog(color){
    const value = color;

    switch (value) {
        case 'green':
            frog = "regular_frog.png";
            break;
        case 'pink':
            frog = "pink_frog.png";
            break;
        case 'blue':
            frog = "blue_frog.png";
            break;
        default:
          console.log(`Sorry, we are out of.`);
      }
    colorFrog();
}


function popUp(item) {
    var popup = document.getElementById(item);
    popup.classList.toggle("show");
  }

  function popOut(item) {
    var popup = document.getElementById(item);
    popup.classList.toggle("hide");
  }