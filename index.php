<?php
$home_dir = $_SERVER["DOCUMENT_ROOT"];
require_once($home_dir . "/admin/bootstrap.php");
$page_id = "index";
require_once($home_dir . "/includes/contacts.php");
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
    <link rel="stylesheet" href="/css/uikit.almost-flat.min.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script>
        $(document).ready(function () {
            /*
             * Replace all SVG images with inline SVG
             */
            jQuery('img.svg').each(function () {
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                jQuery.get(imgURL, function (data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = jQuery(data).find('svg');

                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass + ' replaced-svg');
                    }

                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');

                    // Replace image with new SVG
                    $img.replaceWith($svg);

                }, 'xml');

            });
        });
    </script>
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
    <script type="text/javascript" src="/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function () {

            var stream = {
                    title: "Julian Radio",
                    mp3: "http://45.62.245.147:8069/my.mp3"
                },
                ready = false;

            $("#jquery_jplayer_1").jPlayer({
                ready: function (event) {
                    ready = true;
                    $(this).jPlayer("setMedia", stream);
                },
                pause: function () {
                    $(this).jPlayer("clearMedia");
                },
                error: function (event) {
                    if (ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
                        // Setup the media stream again and play it.
                        $(this).jPlayer("setMedia", stream).jPlayer("play");
                    }
                },
                swfPath: "/js/jplayer",
                supplied: "mp3",
                preload: "none",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                keyEnabled: true
            });
        });
        //]]>
    </script>
    <!--    <script src="/js/jquery-ui/jquery-ui.min.js"></script>-->
    <!--    <script>-->
    <!--        $(function () {-->
    <!--            $("#volume").slider({-->
    <!--                orientation: "horizontal",-->
    <!--                range: "min",-->
    <!--                max: 100,-->
    <!--                value: 80,-->
    <!--                //slide: function1,-->
    <!--                //change: function2-->
    <!--            });-->
    <!--        });-->
    <!--    </script>-->
</head>
<body>
<div class="main">
    <div class="socials-sb">
        <ul>
            <li><a class="vk" href="<?= $social["vk"] ?>" target="_blank"><img class="svg"
                                                                               src="/img/socials/vk.svg"></a></li>
            <li><a class="fb" href="<?= $social["fb"] ?>" target="_blank"><img class="svg"
                                                                               src="/img/socials/fb.svg"></a></li>
            <li><a class="inst" href="<?= $social["inst"] ?>" target="_blank"><img class="svg"
                                                                                   src="/img/socials/inst.svg"></a></li>
            <li><a class="mail" href="<?= $social["mailru"] ?>" target="_blank"><img class="svg"
                                                                                     src="/img/socials/mail.svg"></a>
            </li>
            <li><a class="tw" href="<?= $social["tw"] ?>" target="_blank"><img class="svg"
                                                                               src="/img/socials/tw.svg"></a></li>
            <li><a class="yt" href="<?= $social["yt"] ?>" target="_blank"><img class="svg"
                                                                               src="/img/socials/yt.svg"></a></li>
            <li><a class="skype" href="#"> <img class="svg" src="/img/socials/skype.svg"></a></li>
        </ul>
    </div>
    <div class="menu-sb">
        <ul>
            <li><a class="menu_logo_a" href="#">
                    <div class="uk-vertical-align centered-2 ">
                        <div class="uk-vertical-align-middle menu_logo_div"><img src="/img/menu/jr-logo.svg"/>JULIAN
                            RADIO
                        </div>
                    </div>
                </a></li>
            <li><a href="#">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/news.svg"/>Новости</div>
                    </div>
                </a></li>
            <li><a href="#">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/jul.svg"/>Юлиан</div>
                    </div>
                </a></li>
            <li><a href="#">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/program.svg"/>Программа</div>
                    </div>
                </a></li>
            <li><a href="#">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/contacts.svg"/>Контакты</div>
                    </div>
                </a></li>
        </ul>
    </div>
    <div class="uk-container uk-container-center uk-text-center section">
        <div class="julian_news">
            <ul class="notices">
                <li>
                    <!--                    <p>Новости Julian: Премьера нового альбома 2016 - лето! &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>-->
                    <?php foreach ($notices as $notice) { ?>
                        <p><?php echo $notice["text"]; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    <?php }; ?>
                </li>
            </ul>
        </div>
        <div class="main-player">
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <ul id="jp_container_1" class="uk-grid uk-grid-collapse uk-grid-width-1-3 jp-audio-stream" role="application" aria-label="media player">
                <li class="uk-vertical-align uk-text-right">
                    <div class="uk-vertical-align-middle">
                        <div class="order_speed">
                            <button class="uk-button ord_button" data-uk-modal="{target:'#my-id'}">
                                Заказать песню
                            </button>
                            <ul class="speed">
                                <li><a href="mms://wm5.spacialnet.com/Julian_Radio_wma32" class="ord_button">32 кб/с</a>
                                </li>
                                <li><a href="mms://wm12.spacialnet.com/Julianradio" class="ord_button">128 кб/с</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li >
                    <div class="jp-controls controls">
<!--                    <img class="uk-vertical-align-middle uk-img-preserve play_img " src="/img/play.png" alt="">-->

<!--                    <div class="round1"></div>-->
<!--                        <div class="cssload-container">-->
                            <div class="cssload-whirlpool"></div>
<!--                        </div>-->
                        <div class="player-button ">
                            <button class="jp-play big-button" role="button" tabindex="0">
                                <img src="/img/play_circle.svg" role="button" class="play">
                                <img src="/img/pause_circle.svg" role="button" class="pause" >
                            </button>
                        </div>
                    </div>
                </li>
                <li class="uk-vertical-align uk-text-left jp-type-single">
                    <div class="uk-vertical-align-middle jp-gui jp-interface">
                        <div class="jp-volume-controls">
                            <div class="player-line">
                                <div class="volume">
                                    <button class="jp-mute" role="button" tabindex="0">
                                        <img src="/img/vol-on.svg" class="on" style="width: 25px;">
                                        <img src="/img/vol-off.svg" class="off" style="width: 25px;">

<!--                                        <i class="uk-icon-button uk-icon-volume-up on"  >-->
<!--                                        <i class="uk-icon-button uk-icon-volume-off off"  >-->

                                    </button>
                                    <div class="jp-volume-bar">
                                        <div class="volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <span class="buffering"><span class="loading"></span></span>-->
                    </div>
                </li>
            </ul>
        </div>
        <div class="all_news">
            <ul class="notices">
                <li>
                    <!--                    <p>Все новости: Повторное голосование на EUROVISION 2016 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>-->
                    <?php foreach ($ya_news as $ya_new) { ?>
                        <p><?php echo $ya_new["name"]; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    <?php }; ?>
                </li>
            </ul>
        </div>
        <div class="conc_org">
            <p>Организация концертов Юлиана
                <span> <a href="tel:+7 (926) 492-67-67">+7 (926) 492-67-67</a></span>
            </p>
        </div>
    </div>
</div>
</body>
</html>
