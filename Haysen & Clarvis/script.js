function zmianahc05() {
    var image_hc05 = document.getElementById('hc_09');
    if (image_hc05.src.match("hc_05.jpg")) {
        image_hc05.src = "hc_04.jpg";
    } else {
        image_hc05.src = "hc_05.jpg";
    }
}


function imagefun() {
    var Image_Id = document.getElementById('getImage');
    var div1 = document.getElementById('div1')
    var div2 = document.getElementById('div2')
    if (Image_Id.src.match("filtr_closed.png")) {
        Image_Id.src = "filtr_open.png";
        div2.style.display = "block";
        div1.style.display = "none";

    } else {
        Image_Id.src = "filtr_closed.png";
        div2.style.display = "none";
        div1.style.display = "block";
    }
}