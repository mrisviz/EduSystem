<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js no-svg">
   <head>
      <meta charset="<?= Yii::$app->charset ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
      <title><?= Html::encode($this->title) ?></title>
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <link rel='dns-prefetch' href='//s.w.org' />
       <?php $this->head() ?>
   </head>
   <body class="home page-template page-template-front-page page-template-front-page-php page page-id-2 twentyseventeen-front-page has-header-image page-two-column colors-light">
   <?php $this->beginBody() ?>
   <div id="page" class="site">
      <div id="topbar">
         <div class="burgersoxial" onclick="openclosemenusocial()"><a id="side-menu-switch" title="Меню" class="">Меню</a></div>
         <div id="headerlinkdiv">
            <nav id="header-links" class="">
               <ul class="items">
                  <noindex>
                     <li class="item">
                        <a class="item-link single" href="http://www.sfu-kras.ru/sveden"><span class="item-title">что-то 1</span></a>
                     </li>
                     <li class="item">
                        <a class="item-link single" href="http://www.sfu-kras.ru/sveden"><span class="item-title">что-то 2</span></a>
                     </li>
                     <li class="item">
                        <a class="item-link single" href="http://www.sfu-kras.ru/sveden"><span class="item-title">что-то 3</span></a>
                     </li>
                     <li class="item visible-min-desktop">
                        <a class="item-link-sn vk"></a>
                     </li>
                     <li class="item visible-min-desktop">
                        <a class="item-link-sn twitter"></a>
                     </li>
                     <li class="item visible-min-desktop">
                        <a class="item-link-sn instagram"></a>
                     </li>
                  </noindex>
               </ul>
            </nav>
                <?php if(Yii::$app->user->isGuest): ?>
                    <div class="login-div">
                        <a href="<?= Url::to(['site/login']) ?>" class="my-btn">Вход</a>
                        <a href="<?= Url::to(['site/registration']) ?>" class="my-btn">Регистрация</a>
                    </div>
                <?php endif; ?>
         </div>
         <script>
            var flagsoiacl = false;
            function openclosemenusocial(){
              if(flagsoiacl == false){
                $('#headerlinkdiv').removeClass();
                $('#headerlinkdiv').addClass('openmenu');
                $("#headerlinkdiv").slideDown();
                flagsoiacl = true;
              }
              else{
                $('#headerlinkdiv').removeClass();
                $('#headerlinkdiv').addClass('closemenu');
                $("#headerlinkdiv").slideUp();
                flagsoiacl = false;
              }
            }
         </script>                    
         <nav id="lang-select">
            <ul class="items count-0">
               <li class="item en ">
                  <a href="" class="item-link" title="In English">
                  <span class="item-title">En</span>
                  </a>
               </li>
               <li class="item ru current">
                  <a href="" class="item-link" title="In Russian / На русском">
                  <span class="item-title">Ru</span>
                  </a>
               </li>
            </ul>
         </nav>
         <script>
            $('#lang-select .item').hover(function(){
               $('#lang-select').addClass("hover");
               },
            function(){
               $('#lang-select').removeClass("hover");
            });
         </script>
      </div>
      <script>
         document.write((document.cookie.indexOf('sfu_inverted_overlay=1') >= 0 ? '<div id="special-overlay" class="inverted-overlay">' : '<div id="special-overlay">') + '<div id="overlay-spinner"><div class="overlay-spinner-dot dot-1"></div><div class="overlay-spinner-dot dot-2"></div><div class="overlay-spinner-dot dot-3"></div><div class="overlay-spinner-dot dot-4"></div><div class="overlay-spinner-dot dot-5"></div><div class="overlay-spinner-dot dot-6"></div><div class="overlay-spinner-dot dot-7"></div><div class="overlay-spinner-line line-1"></div><div class="overlay-spinner-line line-2"></div><div class="overlay-spinner-line line-3"></div><div class="overlay-spinner-line line-4"></div><div class="overlay-spinner-line line-5"></div></div></div>');
      </script>
      <header id="header">
         <div class="top-back"></div>
         <div class="header-top">
            <h1 id="main-logo">
               <a href="" class="main-logo-link" title="На главную страницу сайта">
               <img src="/img/svg/main-logo-mobile.svg" tppabs="http://about.sfu-kras.ru/sites/all/themes/sfu2016/img/svg/main-logo-mobile.svg" onerror="this.onerror=null; this.src='/img/main-logo-mobile.png'" width="300" height="40" class="main-logo-image mobile" alt="Сибирский федеральный университет">
               <img src="/img/svg/main-logo.svg" tppabs="http://about.sfu-kras.ru/sites/all/themes/sfu2016/img/svg/main-logo.svg" onerror="this.onerror=null; this.src='/img/main-logo.png'" width="277" height="40" class="main-logo-image" alt="Сибирский федеральный университет">
               Сибирский федеральный университет        </a>
            </h1>
            <div class="burger" onclick="openclosemenu()">
               <img src="/img/iconfinder_menu-alt_134216.png" alt="" width="40px">
            </div>
            <script>
               var flag = false;
               function openclosemenu(){
                 if(flag == false){
                   $('#main-menu').removeClass();
                   $('#main-menu').addClass('openmenu');
                   $("#main-menu").slideDown();
                   flag = true;
                 }
                 else{
                   $('#main-menu').removeClass();
                   $('#main-menu').addClass('closemenu');
                   $("#main-menu").slideUp();
                   flag = false;
                 }
               }
            </script>
            <nav id="main-menu">
               <ul class="items">
                  <ul class="items" id="itemsnavmenu">
                     <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83 active"><a href="">О компании</a></li>
                     <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"><a href="">Проекты</a></li>
                     <li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-85">
                        <a href="">Структура</a>
                        <ul class="sub-menu">
                           <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97"><a href="">Руководство</a></li>
                           <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="">Команда</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a href="">Фото</a></li>
                     <li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a href="">Обучение</a></li>
                     <li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a href="">WorldSkills</a></li>
                     <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a href="">Новости</a></li>
                     <li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a href="">СМИ</a></li>
                  </ul>
                  <script>
                     $('#itemsnavmenu > li').addClass('item nested');
                     $('#itemsnavmenu > li > a').addClass('item-link item-title');
                     $('#itemsnavmenu > li > ul').addClass('subitems');
                     $('#itemsnavmenu > li > ul > li').addClass('subitem');
                     $('#itemsnavmenu > li > ul > li > a').addClass('subitem-link');
                     var leftBoxElements = $('.current-menu-item'); // найдет первый и второй элементы
                     leftBoxElements.addClass('active');
                  </script>
               </ul>
            </nav>
         </div>
         <div class="bottom-back"></div>
         <div class="header-bottom">
            <div class="slogan">Управляй своим будущим</div>
            <nav id="additional-menu">
               <ul class="items">
                  <li class='item'>
                     <a class='item-link' href="">
                        <span class="item-title">
                           <noindex>Мой СФУ</noindex>
                        </span>
                     </a>
                  </li>
                  <li class='item'>
                     <a class='item-link' href="">
                        <span class="item-title">
                           <noindex>Курсы</noindex>
                        </span>
                     </a>
                  </li>
                  <li class='item'>
                     <a class='item-link' href="">
                        <span class="item-title">
                           <noindex>Библиотека</noindex>
                        </span>
                     </a>
                  </li>
                  <li class='item'>
                     <a class='item-link' href="">
                        <span class="item-title">
                           <noindex>Веб-почта</noindex>
                        </span>
                     </a>
                  </li>
                  <li class="item special"><a href="#" itemprop="copy" class="item-link" title="Версия для слабовидящих"><span class="item-title">Версия для слабовидящих</span></a></li>
               </ul>
            </nav>
         </div>
      </header>
      <!-- слайдер -->
      <a href="/" id="header-visual" class="sfu">
         <div class="header-visual-image" style="width: 817.5px;">
            <img src="/img/default-2.jpg" width="970" height="140" alt="" style="opacity: 1;height: 100%;">
         </div>
         <div class="header-signatures">
            <div class="header-signature-ru"></div>
            <div class="header-signature-en"></div>
         </div>
      </a>
      <div id="breadcrumbs">
          <?= Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
          ]) ?>
      </div>
      <div id="content-body">
          <?= Alert::widget() ?>
          <?= $content ?>
      </div>
      <footer id="footer">
         <div class="footer-top">
            <div class="footer-top-content">
               <nav id="footer-fast-nav">
                  <ul class='items'>
                     <li class='item students'>
                        <a title="Студенту" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Студенту</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item enrollee'>
                        <a title="Поступающему" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Поступающему</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item schoolkids'>
                        <a title="Школьнику" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Школьнику</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item postgraduates'>
                        <a title="Аспиранту, Докторанту" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Аспиранту, Докторанту</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item staff'>
                        <a title="Сотруднику" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Сотруднику</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item press'>
                        <a title="Прессе" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Прессе</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item partners'>
                        <a title="Партнёрам" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Партнёрам</noindex>
                           </span>
                        </a>
                     </li>
                     <li class='item all'>
                        <a title="Всем" href="" class="item-link">
                           <span class="item-title">
                              <noindex>Всем</noindex>
                           </span>
                        </a>
                     </li>
                  </ul>
               </nav>
               <div id="footer-contacts">
                  <div class="footer-contacts-links">
                     <p>
                        <a href="">Редакция сайта</a><br>
                        <a href="">Контактная информация</a>
                     </p>
                     <p><a href="">Сообщить об ошибке</a></p>
                  </div>
                  <div class="footer-contacts-phones">
                     <p>
                        Единая справочная служба:
                        <span class="tel" data-tel="+7 (391) 206-22-22">+7 (391) 206-22-22</span>
                     </p>
                     <p>
                        Приёмная комиссия:
                        <span class="tel" data-tel="+7 (391) 206-20-04">+7 (391) 206-20-04</span>
                     </p>
                  </div>
                  <div class="footer-contacts-bottom">
                     <p class="info"><a href="">Сведения об образовательной организации</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="footer-bottom-content">
               <div id="footer-legal-info">
                  <p class="copyright">&copy; Сибирский федеральный университет, 2006-2019</p>
                  <p class="terms">При использовании текстовых и графических материалов ссылка на сайт обязательна</p>
               </div>
               <form id="footer-search" name="footer-search" action="" method="get">
                  <div class="form-elem">
                     <input type="search" name="q" id="footer-search-query" autocomplete="on" spellcheck="true" autocapitalize="off" autocorrect="off" required="required" maxlength="140">
                     <label for="footer-search-query">Что ищем?</label>
                     <input type='hidden' name='lang' value='ru'>
                     <input type='hidden' name='domain' value='about.sfu-kras.ru'>
                     <button type="submit" class="button" title="Найти"><span class="button-title">Найти</span></button>
                  </div>
               </form>
            </div>
         </div>
      </footer>
       <?php $this->endBody() ?>
   </body>
</html>
<?php $this->endPage() ?>