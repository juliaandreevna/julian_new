<?php
$home_dir = $_SERVER["DOCUMENT_ROOT"];
require_once($home_dir . "/admin/bootstrap.php");
$page_id = "index";
//require_once($home_dir . "/includes/contacts.php");
$page_title = "Главная";
$page_suffix = "Julian Radio - ";
require_once($home_dir . "/includes/ya-news.php");
$notices = collection("Анонсы")->find(["public" => true])->toArray();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Радио Julian</title>
<link rel="stylesheet" href="/css/uikit.almost-flat.min.css" />
<link rel="stylesheet" href="/css/main.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="/js/jquery.simplemarquee.js"></script>
<script>
    $(document).ready(function () {
        $('#ya-news, ul.notices li').simplemarquee({
            speed: 35,
            cycles: 99,
            space: 50,
            delayBetweenCycles: 1000,
            handleHover: true,
            handleResize: false
        });
    });
</script>
<script src="/js/jquery-ui/jquery-ui.min.js"></script>
<script>
    $(function () {
        $("#volume").slider({
            orientation: "horizontal",
            range: "min",
            max: 100,
            value: 80,
            //slide: function1,
            //change: function2
        });
    });
</script>
</head>
<body>
  <div class="main">
    <div class="socials-sb">
      <ul>
        <li><a class="vk" href="#"><img class="svg" src="/img/socials/vk.svg"></a></li>
        <li><a class="fb" href="#"><img class="svg" src="/img/socials/fb.svg"></a></li>
        <li><a class="inst" href="#"><img class="svg" src="/img/socials/inst.svg"></a></li>
        <li><a class="mail" href="#"><img class="svg" src="/img/socials/mail.svg"></a></li>
        <li><a class="tw" href="#"><img class="svg" src="/img/socials/tw.svg"></a></li>
        <li><a class="yt" href="#"><img class="svg" src="/img/socials/yt.svg"></a></li>
        <li><a class="skype" href="#"><img class="svg" src="/img/socials/skype.svg"></a></li>
      </ul>
    </div>
    <div class="menu-sb">
      <ul>
        <li><a class="menu_logo_a" href="#"><div class="uk-vertical-align centered-2 "><div class="uk-vertical-align-middle menu_logo_div"><img src="/img/menu/jr-logo.svg"/>JULIAN RADIO</div></div></a></li>
        <li><a href="#"><div class="uk-vertical-align centered-2"><div class="uk-vertical-align-middle"><img src="/img/menu/news.svg"/>Новости</div></div></a></li>
        <li><a href="#"><div class="uk-vertical-align centered-2"><div class="uk-vertical-align-middle"><img src="/img/menu/jul.svg"/>Юлиан</div></div></a></li>
        <li><a href="#"><div class="uk-vertical-align centered-2"><div class="uk-vertical-align-middle"><img src="/img/menu/program.svg"/>Программа</div></div></a></li>
        <li><a href="#"><div class="uk-vertical-align centered-2"><div class="uk-vertical-align-middle"><img src="/img/menu/contacts.svg"/>Контакты</div></div></a></li>
      </ul>
    </div>
    <div class="uk-container uk-container-center uk-text-center section">
        <div class="julian_news">
            <ul class="notices">
                <li>
                    <p>Новости Julian: Премьера нового альбома 2016 - лето! &nbsp&nbsp&nbsp&nbsp</p>
<!--                    --><?php //foreach ($notices as $notice) { ?>
<!--                        <p>--><?php //echo $notice["text"]; ?><!--</p>-->
<!--                    --><?php //}; ?>
                </li>
            </ul>
        </div>

        <div class="player">
            <ul class="uk-grid ">
                <li>
                    <button class="my-button uk-button" data-uk-modal="{target:'#my-id'}">Заказать песню</button>
                    <ul class="speed">
                        <li><a href="mms://wm5.spacialnet.com/Julian_Radio_wma32" class="my-button">32 кб/с</a>
                        </li>
                        <li><a href="mms://wm12.spacialnet.com/Julianradio" class="my-button">128 кб/с</a></li>
                    </ul>
                </li>
                <li>
                    <img class="play_img" src="/img/play.png" alt="">
                </li>
                <li>
                    <div class="volume">
                        <button class="jp-mute" role="button" tabindex="0">
                            <img src="/img/volume-all.png" class="on" style="width: 25px;">
                            <img src="/img/volume-all-off.png" class="off" style="width: 25px;">
                        </button>
                        <div class="jp-volume-bar">
                            <div class="volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="all_news">
            <ul class="notices">
                <li>
                    <p>Все новости: Повторное голосование на EUROVISION 2016 &nbsp&nbsp&nbsp&nbsp</p>
<!--                    --><?php //foreach ($ya_news as $ya_new) { ?>
<!--                        <p>--><?php //echo $ya_new["name"]; ?><!-- </p>-->
<!--                    --><?php //}; ?>
                </li>
            </ul>
        </div>
        <div class="content-order">
            <p>Организация концертов Юлиана: <span> <a href="tel:+7 (926) 492-67-67">+7 (926) 492-67-67</a></span>
            </p>
        </div>
    </div>
  </div>
<script>
$(document).ready(function(){
/*
* Replace all SVG images with inline SVG
*/
  jQuery('img.svg').each(function(){
      var $img = jQuery(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');

      jQuery.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Add replaced image's ID to the new SVG
          if(typeof imgID !== 'undefined') {
              $svg = $svg.attr('id', imgID);
          }
          // Add replaced image's classes to the new SVG
          if(typeof imgClass !== 'undefined') {
              $svg = $svg.attr('class', imgClass+' replaced-svg');
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr('xmlns:a');

          // Replace image with new SVG
          $img.replaceWith($svg);

      }, 'xml');

  });
});
</script>

</body>
</html>
