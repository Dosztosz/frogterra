

function schowaj(){
    $("#1").fadeOut(500);
}

function dissapear(mission){
    var missionNumber = mission;
    schowaj();
    
}

function popUp(item) {
    var popup = document.getElementById(item);
    popup.classList.toggle("show");
  }

  function popOut(item) {
    var popup = document.getElementById(item);
    popup.classList.toggle("hide");
  }