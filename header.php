<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Easy Dent</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Easy Dent, The best dentists in the whole area of Burgas"/>
  <meta name="image" content="http://deadneon.uchenici.bg/EasyDent/img/logo.jpg"/>
  
  <link rel="shortcut icon" href="img/logo.ico" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster|Oswald|Raleway|PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" href="css/main.css">
  
  <script src="js/vendor/jquery-2.2.3.min.js"></script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
  <script src="js/main.js" type="text/javascript"></script>
  
<!--  <script src="js/slide.js" type="text/javascript"></script>-->

</head>
  <body>
  <header>
    <div id="home" class="head"><a href="index.php"  style='text-decoration: none;'>
     <img src="img/logo.png" alt="Easy Dent">
     <h1>Easy Dent</h1>
     </a>
    </div>
    <div id="flags">
      <a href="index.php?lang=en"><img src="img/trnsp.png" class="flag flag-gb" alt="English" /></a>
      <a href="index.php?lang=bg"><img src="img/trnsp.png" class="flag flag-bg" alt="Bulgarian" /></a>
    </div>
    <!-- Return to Top -->
    <a href="#home" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <nav class="nav_menu">
      <div href="#" class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <span id="nav_name"><?php echo $lang['MENU_TITLE']; ?></span>
      <ul class="clearfix menu">
        <li><a href="#home"><?php echo $lang['MENU_HOME']; ?></a></li>
        <li><a href="#work"><?php echo $lang['MENU_WORK']; ?></a></li>
        <li><a href="#prices"><?php echo $lang['MENU_PRICES']; ?></a></li>
        <li><a href="#about"><?php echo $lang['MENU_ABOUT']; ?></a></li>
        <li><a href="#contacts"><?php echo $lang['MENU_CONTACT_US']; ?></a></li><!--How can you contact us-->
      </ul>
    </nav>
  </header>
