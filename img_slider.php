<?php
//$fi = new FilesystemIterator('../img/slider/', FilesystemIterator::SKIP_DOTS); <?php echo iterator_count($fi); 
?>
 

 <script>
  var imagecount=1;
  var total= 4;
  
  window.setInterval(function slideA(){
    var Image = document.getElementById('img');
    imagecount = imagecount + 1;
    if(imagecount > total) {imagecount = 1;}
    if(imagecount < 1){imagecount = total;}
    Image.src = "img/slider/img"+ imagecount + ".jpg";
  },5000);
  
/*  function slide(x){
    var sliding = document.getElementById('img');
    imagecount = imagecount + x;
    if(imagecount > total) {imagecount = 1;}
    if(imagecount < 1){imagecount = total;}
    sliding.src = "img/slider/img"+ imagecount + ".jpg";
  }*/

//  $('.left_arrow').on('click', slide(-1));
//  $('.right_arrow').on('click', slide(1));
</script>

 <div class="img_slider">
  <div class="inner">
   <img src="img/slider/img1.jpg" id="img">
    <div class="title_slider">Усмивката Ви<br>
      <span>Е нашето изкуство</span>
    </div>
<!--    <div class="left_arrow"><i id="left" class="fa fa-angle-left custom" ></i></div>
    <div class="right_arrow"><i id="right" class="fa fa-angle-right custom" ></i></div>-->
  </div>
</div>