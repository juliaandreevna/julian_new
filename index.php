<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Радио Julian</title>
<link rel="stylesheet" href="/css/uikit.almost-flat.min.css" />
<link rel="stylesheet" href="/css/main.css" />
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/uikit.min.js"></script>
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
        <li><a href="#"><div class="centered-2"><img src="/img/menu/jr-logo.svg"/>JULIAN RADIO</div></a></li>
        <li><a href="#"><div class="centered-2"><img src="/img/menu/news.svg"/>Новости</div></a></li>
        <li><a href="#"><div class="centered-2"><img src="/img/menu/jul.svg"/>Юлиан</div></a></li>
        <li><a href="#"><div class="centered-2"><img src="/img/menu/program.svg"/>Программа</div></a></li>
        <li><a href="#"><div class="centered-2"><img src="/img/menu/contacts.svg"/>Контакты</div></a></li>
      </ul>
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
