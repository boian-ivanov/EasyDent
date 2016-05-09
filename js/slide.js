/*
var imagecount = 1;
var total = 3;

function slide(x){
  var Image = document.getElementById("imgslide");
  alert(Image);
  imagecount = imagecount + x;
  if(imagecount > total) {imagecount = 1;}
  if(imagecount < 1){imagecount = total;}
  Image.src = "img/img"+ imagecount + ".jpg";
}

$('.left_arrow').on('click', slide(-1));
$('.right_arrow').on('click', slide(1));


window.setInterval(function slideA(){
    var Image = document.getElementById('img');
    imagecount = imagecount + 1;
    if(imagecount > total) {imagecount = 1;}
    if(imagecount < 1){imagecount = total;}
    Image.src = "img/img"+ imagecount + ".jpg";
  },5000);
*/