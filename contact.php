<!--<script language="JavaScript">
  
  function autoResize(id) {
    var newheight;
    var newwidth;

    if (document.getElementById) {
      newheight = document.getElementById(id).contentWindow.document.body.scrollHeight;
      newwidth = document.getElementById(id).contentWindow.document.body.scrollWidth;
    }

    document.getElementById(id).height = (newheight) + "px";
    document.getElementById(id).width = (newwidth) + "px";
  }
  //
</script>-->
<div id="contacts" class="line-separator"></div>
<h2 class="title"><?php echo $lang['MENU_CONTACT_US'] ?></h2>
<div class="google_map">
  <iframe width="750" height="450" id="iframe1" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAmvM4YkfcLTykN7uw7NKxXq7AXAWNEfUU&q=Bulevard+Stefan+Stambolov+73+Burgas" allowfullscreen>
  </iframe>
</div>

<div class="contact_right">
  <p class="contact_adress"><i class="fa fa-map-marker" aria-hidden="true"></i> Адрес : <span>Булевард Стефан Стамболов 73, 412, 8000 Бургас, България</span>
  </p>
  <p><i class="fa fa-phone"></i>
    <span class="contact_phone">087 713 3257</span></p>
  <p><i class="fa fa-facebook-square" aria-hidden="true"></i>
    <a class="fb_link" href="https://www.facebook.com/eazydent/">www.facebook.com/eazydent/</a>
  </p>
  <form  method="post" action="">
    <div class="form-group">
      Име: &nbsp;
      <input type="text" class="form-control" name="name" placeholder="Вашето име..." maxlength="40">
      <br>
    </div>
    <div class="form-group">
      E-mail:
      <input type="email" class="form-control" name="email" placeholder="Вашата поща..." maxlength="40">
      <br>
    </div>
    <div class="form-group">
      Съобщение:<br>
      <textarea class="form-control" name="msg" placeholder="Вашето мнение/запитване"></textarea>
      <br>
    </div>
    <input type="submit" class="btn btn-orange pull-right" name="sendmail" value="Изпрати">    
  </form>
  
</div>