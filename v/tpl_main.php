<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
<title>360 News</title>
<link href="v/css/common.css" rel="stylesheet" media="all"/>
<link href="v/css/style.css" rel="stylesheet" media="all"/>
<link href="v/css/skin.css" rel="stylesheet" media="all"/>
<link rel="icon" href="v/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="v/images/360edited1.png" type="image/x-icon" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
<script src="v/js/jquery-ui.min.js"></script>
<script src="v/js/jquery.ad-gallery.pack.js"></script>
<script src="v/js/jquery.anythingslider.min.js"></script>
<script src="v/js/jquery.colorbox-min.js"></script>
<script src="v/js/script.js"></script>
<script src="v/js/addComents.js"></script>
<script src="v/js/comentslist.js"></script>
<script src="v/js/functions.js"></script>
<script src="v/js/customSlider.js"></script>

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body class="two_sidebars dark_blue">
<!--[if lte IE 8]><div id="ie_message"><div class="wrapper"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="images/banner_ie.png" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a></div></div><![endif]-->
<div id="wrapper"> 
  <!-- header -->
  <header>
    <div id="above_header">
      <div class="inner">
        <div class="region">
          <div id="block_header_time" class="block">
            <p>Сегодня:
              <time id="time" class="today"></time>
            </p>
          </div>
          <div id="block_header_login" class="block">
            <?if($name_user == null):?>
            <p><a href="index.php?c=login">Войти</a> | <a href="index.php?c=reg">Регистрация</a></p>
            <?endif?>
            <?if($name_user!=null):?>
              <p>Здравствуйте: <?=$name_user?> | <a href="index.php?logout">Выйти</a></p>
            <?endif?>
          </div>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="wrapper">
        <h1 id="logo"><a href="index.html" title="Home">360News</a></h1>
      </div>
    </div>
    <div id="under_header">
      <div class="region">
        <div id="block_main_menu" class="block">
          <div class="inner">
            <nav>
              <ul>
                <li class="first active"><a href="index.php"><span class="bg">Главная</span></a></li>
                <li><a href="index.php?c=gallery_list"><span class="bg">Галерея</span></a></li>
                <li><a href="index.php?c=categories&id_category=world"><span class="bg">Мир</span></a></li>
                <li><a href="index.php?c=categories&id_category=ukraine"><span class="bg">Украина</span></a></li>
                <li><a href="index.php?c=categories&id_category=bisness"><span class="bg">Бизнесс</span></a></li>
                <li><a href="index.php?c=categories&id_category=sport"><span class="bg">Спорт</span></a></li>
                <li><a href="index.php?c=categories&id_category=intertaiment"><span class="bg">Развлечения</span></a></li>
                <li><a href="index.php?c=categories&id_category=helth"><span class="bg">Здоровье</span></a></li>
                <li><a href="index.php?c=categories&id_category=tech"><span class="bg">Техника</span></a></li>
                <li><a href="index.php?c=categories&id_category=report"><span class="bg">Репортаж</span></a></li>
                <?if($accsess):?>
                <li><a href="index.php?a=admin_panel"><span class="bg">Админка</span></a></li>
                <?endif?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
    <?=$content?>
  <!-- footer -->
  <footer>
    <div class="region">
      <div id="block_footer_menu" class="block">
        <nav>
          <ul>
            <li><a href="index.php"><span class="bg">Главная</span></a></li>
            <li><a href="#"><span class="bg">Галерея</span></a></li>
            <li><a href="index.php?c=categories&id_category=world"><span class="bg">Мир</span></a></li>
            <li><a href="index.php?c=categories&id_category=ukraine"><span class="bg">Украина</span></a></li>
            <li><a href="index.php?c=categories&id_category=bisness"><span class="bg">Бизнесс</span></a></li>
            <li><a href="index.php?c=categories&id_category=sport"><span class="bg">Спорт</span></a></li>
            <li><a href="index.php?c=categories&id_category=intertaiment"><span class="bg">Развлечения</span></a></li>
            <li><a href="index.php?c=categories&id_category=helth"><span class="bg">Здоровье</span></a></li>
            <li><a href="index.php?c=categories&id_category=tech"><span class="bg">Техника</span></a></li>
            <li><a href="contacts.html">Контакты</a></li>
          </ul>
        </nav>
      </div>
      <div id="block_copyright" class="block">
        <p>Copyright &copy; Aleksey Labunskiy. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- end footer --> 
</div>
</body>
</html>


