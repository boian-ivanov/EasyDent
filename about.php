<!--<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
  <div id="about" style='overflow:hidden;'>
    <div id='gmap_canvas'>
    </div>
    <style>
    /*
      #gmap_canvas img {
        max-width: none!important;
        background: none!important
      }
    */
    </style>
  </div>

  <script type='text/javascript'>
    function init_map() {
      var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(42.513987, 27.465407),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
      marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(42.513987, 27.465407)
      });
      infowindow = new google.maps.InfoWindow({
        content: '<strong>Easy Dent</strong><br>Bulevard Stefan Stambolov 73, 412, 8000 Burgas, Bulgaria<br>'
      });
      google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
      });
      infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
  </script>-->

<div id="about" class="line-separator"></div>
<h2 class="title"><?php echo $lang['MENU_ABOUT']; ?></h2>
<div class="doc1">
  <h3><?php echo $lang['ABOUT_RUMEN']; ?></h3>
  <div class="rumen pic">
    <img src="img/rumen.jpg" alt="">
  </div>
  <div class="rumen_text">
    <p>Tip ribs bregenwurst ham ribs kielbasa porchetta. Hock braunschweiger tri-tip ribs kielbasa ham turducken pig loin, corned frankfurter kielbasa salami shankle ham t-bone shoulder ham drumstick. Capicola doner biltong drumstick, short ham tenderloin cow ribs ham ham brisket ham pastrami tip shank tip tip mignon brisket tip drumstick cow jowl, sirloin ribs ground fatback rump, pig ribs tip swine pig hock ham ham turkey turducken.</p>
  </div>
</div>

<div class="doc2">
  <h3><?php echo $lang['ABOUT_IVAN']; ?></h3>
<div class="ivan pic">
  <img src="img/ivan.jpg" alt="">
</div>
  <div class="ivan_text">
    <p>Tip ribs bregenwurst ham ribs kielbasa porchetta. Hock braunschweiger tri-tip ribs kielbasa ham turducken pig loin, corned frankfurter kielbasa salami shankle ham t-bone shoulder ham drumstick. Capicola doner biltong drumstick, short ham tenderloin cow ribs ham ham brisket ham pastrami tip shank tip tip mignon brisket tip drumstick cow jowl, sirloin ribs ground fatback rump, pig ribs tip swine pig hock ham ham turkey turducken.</p>
  </div>
</div>