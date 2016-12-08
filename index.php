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
<html class="no-js" lang="ru">
<head>
    <?php require($home_dir . "/includes/top-scripts.php"); ?>
    
</head>
<body>

<!--<div id="fb-root"></div>-->
<!--<script>(function(d, s, id) {-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) return;-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));</script>-->

<div class="pl_bg"></div>
<div class="pl">
    <svg class="site_preloader" viewBox="0 0 800 600">
        <symbol id="s-text">
            <text text-anchor="middle"
                  x="50%"
                  y="45%"
                  class="text--line"
            >
                Julian
            </text>
            <text text-anchor="middle"
                  x="50%"
                  y="55%"
                  class="text--line2"
            >
                Radio
            </text>

        </symbol>

        <g class="g-ants">
            <use xlink:href="#s-text"
                 class="text-copy"></use>
            <use xlink:href="#s-text"
                 class="text-copy"></use>
            <use xlink:href="#s-text"
                 class="text-copy"></use>
<!--            <use xlink:href="#s-text"-->
<!--                 class="text-copy"></use>-->
<!--            <use xlink:href="#s-text"-->
<!--                 class="text-copy"></use>-->
        </g>


    </svg>
</div>


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
            <li><a class="menu_logo_a" href="#julianradio_page">
                    <div class="uk-vertical-align centered-2 ">
                        <div class="uk-vertical-align-middle menu_logo_div"><img src="/img/menu/jr-logo.svg"/>JULIAN
                            RADIO
                        </div>
                    </div>
                </a></li>
            <li><a href="#news_page">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/news.svg"/>Новости</div>
                    </div>
                </a></li>
            <li><a href="#pinContainer">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/jul.svg"/>Юлиан</div>
                    </div>
                </a></li>
            <li><a href="#forum_page">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/program.svg"/>Форум</div>
                    </div>
                </a></li>
            <li><a href="#contact_page">
                    <div class="uk-vertical-align centered-2">
                        <div class="uk-vertical-align-middle"><img src="/img/menu/contacts.svg"/>Контакты</div>
                    </div>
                </a></li>
        </ul>
    </div>

    <div id="content-wrapper">
		<div id="example-wrapper">
			<div class="scrollContent">

				<section class="demo" id="section-wipes">
					<style type="text/css">
						.panel {
							height: 100%;
							width: 100%;
						}

                        .panel_marg {
                            margin-bottom: 200px;
                        }

						/*.panel.blue,*/
                        /*.panel.turqoise,*/
                        /*.panel.green,*/
                        /*.panel.bordeaux{*/
							/*margin-bottom: 200px;*/
						/*}*/
                        #pinContainer {
							width: 100%;
							height: 100%;
							overflow: hidden;
							-webkit-perspective: 1000;
							        perspective: 1000;
						}
						#slideContainer {
							width: 400%; /* to contain 3 panels, each with 100% of window width */
							height: 100%;
						}
						.panel_slide {
							height: 100%;
							width: 25%; /* relative to parent -> 25% of 400% = 100% of window width */
							float: left;
						}


					</style>

<!--
					<form class="move">
						<fieldset>
							<legend>Anchor Links</legend>
							<p><a href="#julianradio_page">JULIANRADIO</a></p>
							<p><a href="#news_page">Новости</a></p>
							<p><a href="#pinContainer">Юлиан</a></p>
								<p><a href="#audio_page">- Аудио</a></p>
								<p><a href="#video_page">- Видео</a></p>
								<p><a href="#photo_page">- Фото</a></p>
								<p><a href="#biography_page">- Биография Юлиана</a></p>
							<p><a href="#forum_page">Форум</a></p>
							<p><a href="#contact_page">Контакты</a></p>
						</fieldset>
					</form>
-->

					<section class="panel " id="julianradio_page">
<!--					<b>Julian Radio</b>-->
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

					</section>
					<section class="panel bgimage panel_marg" id="news_page">
                        <div class="cont news_page_cont">
                            <div class="uk-container uk-container-center uk-text-center section">
                                <h3 class="uk-text-center h3_section">Новости</h3>
                                <div class="uk-panel uk-panel-box my_panel news_panel">
                                    <ul class="uk-grid uk-grid-collapse uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-2">
                                        <li>
                                            <div class="greatest_news ">
                                                
                                            </div>
                                        </li>

                                        <li>
                                            <div class="fb_news">
                                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=400&height=470&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="400" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                            </div>
                                        </li>
                                    </ul>    

                                </div>
                            </div>
                        </div>
                    </section>

                    <div id="pinContainer">
						<div id="slideContainer">
							<section class="panel_slide bgimage panel_marg" id="audio_page">
                                    <div class="cont audio_page_cont">
                                        <div class="uk-container uk-container-center uk-text-center section">
                                            <h3 class="uk-text-center h3_section">Аудио</h3>
                                            <div class="audio_panel">

                                                <ul class="uk-grid uk-grid-small uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4" data-uk-grid-margin="{cls:'mt'}" data-uk-grid-parallax="{translate:100}" >
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/08-meri.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Мэрилин<br><span>2016</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                        </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/07-yata.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Я так сильно тебя люблю<br><span>2010</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/01-prob.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Пробуждение<br><span>2003</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/02-yana.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Я на арбате продаю дожди<br><span>2002</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/03-neve.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Не верю в королей<br><span>1999</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/04-tyta.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Ты танцуешь, я пою<br><span>1996</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/05-lubi.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>Люби меня<br><span>1995</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>
                                                   <li>
                                                       <div class="album_panel grid">
                                                           <figure class="effect-apollo">
                                                               <img src="/img/albums/06-denj.jpg" alt=""/>
                                                               <figcaption>
                                                                   <p>День рождения<br><span>1994</span></p>
                                                                   <a href="#"></a>
                                                               </figcaption>
                                                           </figure>
                                                       </div>
                                                   </li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
							</section>
							<section class="panel_slide bgimage panel_marg" id="video_page">
								<div class="cont video_page_cont">
                                    <div class="uk-container uk-container-center uk-text-center section">
                                        <h3 class="uk-text-center h3_section">Видео</h3>
                                        <div class="video_panel uk-clearfix" data-uk-slideset="{animation: 'scale', default:18}">
                                            <!-- Filter Controls -->
                                            <ul id="video-filter" class="uk-subnav uk-subnav-pill">
                                                <li data-uk-filter=""><a href="">Все</a></li>
                                                <li data-uk-filter="filter-va"><a href="">Клипы</a></li>
                                                <li data-uk-filter="filter-vb"><a href="">Концерты</a></li>
                                                <li data-uk-filter="filter-vc"><a href="">Интервью</a></li>
                                                <li data-uk-filter="filter-vd"><a href="">Радио</a></li>
                                                <li data-uk-filter="filter-vf"><a href="">Жизнь</a></li>
                                            </ul>
                                            <div class="uk-slidenav-position uk-float-left video_slidenav">
                                                <!-- Dynamic Grid -->
                                                <ul class="uk-slideset uk-grid uk-grid-small uk-grid-width-1-6 "  data-uk-grid-margin="{cls:'mtr'}">
                                                    <li data-uk-filter="filter-va">
                                                        <figure class="uk-panel uk-overlay uk-overlay-hover">
                                                            <a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}">
                                                                <img src="/img/albums/04-tyta.jpg" alt="">
                                                                <figcaption class="uk-overlay-panel uk-overlay-background">
                                                                    <h3>Обложка</h3>
                                                                    <p>Ты танцуешь, я пою</p>
                                                                </figcaption>
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li data-uk-filter="filter-va"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb,filter-vc"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb,filter-vc"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vb,filter-vc"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-vc"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-va,filter-vb"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                </ul>
                                                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                                            </div>
                                            <ul class="uk-slideset-nav uk-dotnav uk-flex-column uk-float-right"></ul>
                                        </div>
                                    </div>
                                </div>
							</section>
							<section class="panel_slide bgimage panel_marg" id="photo_page">
                                <div class="cont photo_page_cont">
                                    <div class="uk-container uk-container-center uk-text-center section">
                                        <h3 class="uk-text-center h3_section">Фото</h3>
                                        <div class="photo_panel uk-clearfix" data-uk-slideset="{animation: 'scale', default:18}">
                                            <!-- Filter Controls -->
                                            <ul id="photo-filter" class="uk-subnav uk-subnav-pill">
                                                <li data-uk-filter=""><a href="">Все</a></li>
                                                <li data-uk-filter="filter-a"><a href="">Фотосессии</a></li>
                                                <li data-uk-filter="filter-b"><a href="">Концерты</a></li>
                                                <li data-uk-filter="filter-c"><a href="">Личное</a></li>
                                            </ul>
                                            <div class="uk-slidenav-position uk-float-left photo_slidenav">
                                                <!-- Dynamic Grid -->
                                                <ul class="uk-slideset uk-grid uk-grid-small uk-grid-width-1-6 "  data-uk-grid-margin="{cls:'mtr'}">
                                                    <li data-uk-filter="filter-a">
                                                        <figure class="uk-panel uk-overlay uk-overlay-hover">
                                                            <a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}">
                                                                <img src="/img/albums/04-tyta.jpg" alt="">
                                                                <figcaption class="uk-overlay-panel uk-overlay-background">
                                                                    <h3>Обложка</h3>
                                                                    <p>Ты танцуешь, я пою</p>
                                                                </figcaption>
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li data-uk-filter="filter-a"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b,filter-c"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b,filter-c"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-b,filter-c"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-c"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                    <li data-uk-filter="filter-a,filter-b"><figure class="uk-panel uk-overlay uk-overlay-hover"><a href="/img/albums/04-tyta.jpg" data-uk-lightbox="{group:'my-group'}"><img src="/img/albums/04-tyta.jpg" alt=""><figcaption class="uk-overlay-panel uk-overlay-background"></figcaption></a></figure></li>
                                                </ul>
                                                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                                            </div>
                                            <ul class="uk-slideset-nav uk-dotnav uk-flex-column uk-float-right"></ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
							<section class="panel_slide bgimage panel_marg" id="biography_page">
								<div class="cont biography_page_cont">
                                    <div class="uk-container uk-container-center uk-text-center section">
                                        <h3 class="uk-text-center h3_section">Биография Юлиана</h3>
                                        <div class="biography_panel">

                                        </div>
                                    </div>
                                </div>
							</section>
						</div>
					</div>

					<section class="panel bgimage panel_marg"  id="forum_page">
						<div class="cont forum_page_cont">
                            <div class="uk-container uk-container-center uk-text-center section">
                                <h3 class="uk-text-center h3_section">Форум</h3>
                                <div class="forum_panel">

                                </div>
                            </div>
                        </div>
					</section>
					<section class="panel bgimage panel_marg"  id="contact_page">
						<div class="cont contact_page_cont">
                            <div class="uk-container uk-container-center uk-text-center section">
                                <h3 class="uk-text-center h3_section">Контакты</h3>
                                <div class="contact_panel">

                                </div>
                            </div>
                        </div>
					</section>

					<!-- anchor_link_scrolling -->
					<script type="text/javascript" src="js/lib/greensock/plugins/ScrollToPlugin.min.js"></script>

					<script>
						$(function () { // wait for document ready

                            // FOR SECTION VERTICAL

							// init
							var controller = new ScrollMagic.Controller({
								globalSceneOptions: {
									triggerHook: 'onLeave'
								}
							});

							// get all slides
							var slides = document.querySelectorAll("section.panel");

							// create scene for every slide
							for (var i=0; i<slides.length; i++) {
								new ScrollMagic.Scene({
										triggerElement: slides[i]
									})
									.setPin(slides[i])
//									.addIndicators() // add indicators (requires plugin)
									.addTo(controller);
							}

                            // FOR SLIDES HORIZONTAL

                            // define movement of panels
							var wipeAnimation = new TimelineMax()
								// animate to second panel
								.to("#slideContainer", 0.5, {z: -150})		// move back in 3D space
								.to("#slideContainer", 1,   {x: "-25%"})	// move in to first panel
								.to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
								// animate to third panel
								.to("#slideContainer", 0.5, {z: -150, delay: 1})
								.to("#slideContainer", 1,   {x: "-50%"})
								.to("#slideContainer", 0.5, {z: 0})
								// animate to forth panel
								.to("#slideContainer", 0.5, {z: -150, delay: 1})
								.to("#slideContainer", 1,   {x: "-75%"})
								.to("#slideContainer", 0.5, {z: 0});

							// create scene to pin and link animation
							new ScrollMagic.Scene({
									triggerElement: "#pinContainer",
									triggerHook: "onLeave",
									duration: "500%"
								})
								.setPin("#pinContainer")
								.setTween(wipeAnimation)
								.addIndicators() // add indicators (requires plugin)
								.addTo(controller);


							// FOR ANCHOR LINK SCROLLING

							// build tween
//							var tween = TweenMax.from("#animate", 0.5, {autoAlpha: 0, scale: 0.7});

							// build scene
//							var scene = new ScrollMagic.Scene({triggerElement: "a#top", duration: 200, triggerHook: "onLeave"})
//									.setTween(tween)
//									.addIndicators() // add indicators (requires plugin)
//									.addTo(controller);

							// change behaviour of controller to animate scroll instead of jump
							controller.scrollTo(function (newpos) {
								TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
							});

							//  bind scroll to anchor links
							$(document).on("click", "a[href^='#']", function (e) {
								var id = $(this).attr("href");
								if ($(id).length > 0) {
									e.preventDefault();

									// trigger scroll
									controller.scrollTo(id);

									// if supported by the browser we can even update the URL.
									if (window.history && window.history.pushState) {
										history.pushState("", document.title, id);
									}
								}
							});


						});
					</script>
				</section>
			</div>
		</div>
	</div>



</div>

<script>
    $(document).ready(function() {

//        setTimeout(function(){
//            $('body').addClass('loaded')
//        }, 3000);

        $('body').addClass('loaded');
    })
</script>

</body>
</html>
