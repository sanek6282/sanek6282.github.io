<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>web-студия "Eleon"</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.ico">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'>
  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
  <link rel='stylesheet' href='assets/css/vendor.css'>

  <!--
    edit to
    theme-1.css
    theme-2.css
    theme-3.css
    theme-4.css
    theme-5.css
    theme-6.css
  -->
  <link rel='stylesheet' href='assets/css/theme-1.css' id="theme">

  <link rel='stylesheet' href='assets/css/custom.css'>
  <script src='assets/js/modernizr-2.8.3.min.js'></script>
</head>

<body>

<div id="page-loader" class="page-loader">
<div class="loader-wrapper">
	<div class="loader">
    <div class="roller"></div>
    <div class="roller"></div>
  </div>
  
  <div id="loader2" class="loader">
    <div class="roller"></div>
    <div class="roller"></div>
  </div>
  
  <div id="loader3" class="loader">
    <div class="roller"></div>
    <div class="roller"></div>
  </div>
</div>
</div>
  <header id="siteHeader" class="site-header site-header-fixed-top">
    <nav id="siteNavbar" class="navbar navbar-default navbar-fixed-top site-navbar-from-light-fg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle-icon navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Меню</span>
            <span class="icon ti-layout-grid3-alt"></span>
          </button>

          <a class="navbar-brand" href="#">
            <img class="navbar-brand-media-light" src="assets/img/site-header-logo-light.png" alt="">
            <img class="navbar-brand-media-dark" src="assets/img/site-header-logo-dark.png" alt="">
          </a>
        </div> <!-- .navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a data-smooth-scroll="true" href="#home">Главная</a></li>
            <li><a data-smooth-scroll="true" href="#feature1">Продукт</a></li>
            <li><a data-smooth-scroll="true" href="#feature2">Описание</a></li>
            <li><a data-smooth-scroll="true" href="#pricing">Цена</a></li>
            <li><a data-smooth-scroll="true" href="#faq">Вопрос/Ответ</a></li>
            <li><a data-smooth-scroll="true" href="#contacts">Контакты</a></li>
            <li class="audio-toggle"><a href="#"></a></li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div>
    </nav>
  </header> <!-- .site-header -->

  <div class="main">
    <div id="home" class="home-section home-hero align-outer bg-theme-1">

      <div id="homeBgImg" ></div> <!-- #homeBgImg -->

      <div id="homeBgOverlay" class="bg-black" data-opacity=".5"></div> <!-- #homeBgOverlay -->

      <div id="homeBgParticle" data-opacity="1"></div> <!--- #homeBgParticle -->

      <div class="align-inner align-middle">
        <div class="container">
          <div class="home-row row">
            <div class="home-left-col col-sm-6">
              <h1 class="text-animate section-title">Поможем создать сайт, который увеличит прибыль вашего бизнеса.</h1>

              <p class="text-lead wow fadeInUp">Мы учитываем идеальный баланс дизайна и программирования при разработке сайта для вашего проекта.</p>

              <div class="btn-wrap">
                <a class="btn btn-lg btn-theme-2 wow bounceIn" data-wow-delay=".2s" data-smooth-scroll="true" href="#pricing">Цены <span class="icon ti-arrow-circle-down"></span></a>
                <a class="btn btn-lg btn-default wow bounceIn" data-wow-delay=".2s" data-smooth-scroll="true" href="#feature1">О продукте <span class="icon ti-arrow-circle-down"></span></a>
              </div>
            </div> <!-- .home-left-col -->

            <div class="home-form-col col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
              <div class="panel panel-theme-2 wow fadeInUp">
                <div class="panel-heading">
                  <h5>Заказать сайт</h5>
                </div>

                <div class="panel-body">

                  <form id="homeSubscribeForm" class="form home-subscribe-form form-lite" data-action="assets/php/contact.php">
                    <fieldset class="row">
                      <div class="form-group col-sm-12">
                        <label for="contactName">Имя</label>
                        <input id="contactName" class="form-control" type="text" placeholder="Введите имя" name="name">
                      </div>

                      <!--<div class="form-group col-sm-6">
                        <label for="homeSubscribeLname">Last Name</label>
                        <input id="homeSubscribeLname" class="form-control" type="text" placeholder="Enter your last email" name="lname">
                      </div>-->

                      <div class="form-group col-xs-12">
                        <label for="contactEmail1">E-mail</label>
                        <input id="contactEmail1" class="form-control" type="email" placeholder="Ввежите e-mail" name="email">
                      </div>

                      <div class="form-group col-xs-12">
                        <div class="checkbox">
                          <label for="agree">
                            <input id="agree" name="agree" type="checkbox"> Я согласен с <a href="#" class="popup-inline" data-mfp-src="#termsOfService">правилами</a>
                          </label>
                        </div>
                      </div>

                      <div class="form-group col-xs-12">
                        <button class="btn btn-block btn-lg btn-theme-2" type="submit">Заказать</button>
                      </div>

                      <div class="col-xs-12">
                        <span class="form-notify help-block"><span class="icon ti-lock"></span> Заполните все поля.</span>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div> <!-- .home-form-col -->
          </div>
        </div>
      </div>
    </div> <!-- #home-->

    <!--<div id="service" class="service-section">
      <div class="container">
        <div class="service-row row">
          <div class="iconbox col-sm-6 col-md-3 wow fadeInUp">
            <div class="iconbox-media">
              <img class="iconbox-media-img" src="assets/img/service/service-icon-1.png" alt="">
            </div>
            <div class="iconbox-header">
              <h4 class="iconbox-header-title">Mobile Responsive</h4>
            </div>
            <div class="iconbox-content">
              <p>Moved created evening place fruit every first the first it. She'd seed darkness give stars forth image seasons.</p>
            </div>
          </div> --><!-- .iconbox -->

         <!-- <div class="iconbox col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".2s">
            <div class="iconbox-media">
              <img class="iconbox-media-img" src="assets/img/service/service-icon-2.png" alt="">
            </div>
            <div class="iconbox-header">
              <h4 class="iconbox-header-title">Working Form</h4>
            </div>
            <div class="iconbox-content">
              <p>Moved created evening place fruit every first the first it. She'd seed darkness give stars forth image seasons.</p>
            </div>
          </div> --><!-- .iconbox -->

          <!-- <div class="iconbox col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".4s">
            <div class="iconbox-media">
              <img class="iconbox-media-img" src="assets/img/service/service-icon-3.png" alt="">
            </div>
            <div class="iconbox-header">
              <h4 class="iconbox-header-title">Easy to Use</h4>
            </div>
            <div class="iconbox-content">
              <p>Moved created evening place fruit every first the first it. She'd seed darkness give stars forth image seasons.</p>
            </div>
          </div>--> <!-- .iconbox -->

          <!-- <div class="iconbox col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".6s">
            <div class="iconbox-media">
              <img class="iconbox-media-img" src="assets/img/service/service-icon-4.png" alt="">
            </div>
            <div class="iconbox-header">
              <h4 class="iconbox-header-title">Fast Support</h4>
            </div>
            <div class="iconbox-content">
              <p>Moved created evening place fruit every first the first it. She'd seed darkness give stars forth image seasons.</p>
            </div>
          </div>--> <!-- .iconbox -->
       <!-- </div>
      </div>
    </div>--> <!-- #service-->

    <div id="feature1" class="feature1-section">
      <div class="container">
        <div class="feature-1-row row">
          <div class="feature-1-left-col col-sm-6">
            <h2 class="section-title wow fadeInLeft">Мы поможем <b>каждому</b> нашему клиенту создать красивый и профессиональный сайт.</h2>

            <div class="feature-media-row row">
              <div class="feature-media-col col-md-6">
                <div class="feature-media media">
                  <div class="media-left">
                    <span class="media-obejct media-icon icon ti-world color-primary"></span>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Адаптивность сайта</h4>
                    <p>Ваш сайт будет хорошо выглядеть на всех устройствах.</p>
                  </div>
                </div>
              </div>

              <div class="feature-media-col col-md-6">
                <div class="feature-media media">
                  <div class="media-left">
                    <span class="media-obejct media-icon icon ti-email color-accent"></span>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Рабочие формы</h4>
                    <p>Все элементы сайта будут работать, включая различные формы.</p>
                  </div>
                </div>
              </div>

              <div class="feature-media-col col-md-6">
                <div class="feature-media media">
                  <div class="media-left">
                    <span class="media-obejct media-icon icon ti-ruler-pencil color-success"></span>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Просто и надежно</h4>
                    <p>Не задаем лишних вопросов, для надежности применяем технологию PerfectPixel.</p>
                  </div>
                </div>
              </div>

              <div class="feature-media-col col-md-6">
                <div class="feature-media media">
                  <div class="media-left">
                    <span class="media-obejct media-icon icon ti-headphone-alt color-danger"></span>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Быстрая поддержка</h4>
                    <p>Наша поддержка ответит на ваши вопросы и поможет во всем разобраться.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .feature-1-left-col -->

          <div class="feature-1-right-col col-sm-5 col-sm-offset-1">
            <div class="double-screen-right">
              <img class="screen top computer" src="assets/img/feature/feature-phone-1.png" alt="">
              <img class="screen bottom mobile" data-sr="right" src="assets/img/feature/feature-phone-2.png" alt="">
            </div>
          </div> <!-- .feature-1-right-col -->
        </div>
      </div>
    </div> <!-- #feature1 -->

    <div id="feature2" class="feature2-section">
      <div class="container">
        <div class="feature-2-row row">
          <div class="feature-2-right-col col-sm-6 ">
            <h2 class="section-title wow fadeInRight">При создании сайта <b>стараемся</b> не использовать лишних библиотек.</h2>

            <ul class="feature-list">
              <li><span class="icon ti-angle-double-right"></span>Вы получите чистый <b>CSS, JS/JQuery</b> код.</li>
              <li><span class="icon ti-angle-double-right"></span>Благодаря этому, ваш сайт будет быстро загружаться.</li>
              <li><span class="icon ti-angle-double-right"></span>Вносить правки в такой код не составит труда.</li>
              <li><span class="icon ti-angle-double-right"></span>Вы получите гарантию на созданный нами сайт.</li>
            </ul>

            <div class="btn-wrap">
              <a class="btn btn-lg btn-theme-1" data-smooth-scroll="true" href="#download">Цены<span class="icon ti-arrow-circle-down"></span></a>
              <a class="btn btn-lg btn-default" data-smooth-scroll="true" href="#watchVideo">Как мы работаем?<span class="icon ti-arrow-circle-down"></span></a>
            </div>

          </div> <!-- .feature-2-right-col -->

          <div class="feature-2-left-col col-sm-5">
            <div class="double-screen-left">
              <img class="screen top" src="assets/img/feature/feature-phone-3.jpg" alt="">
              <!--<img class="screen bottom" src="assets/img/feature/feature-phone-4.png" data-sr="left" alt="">-->
              <div class="cloud-from-left"></div>
            </div>
          </div> <!-- .feature-2-left-col -->
        </div>
      </div>
    </div> <!-- #feature2 -->

    <div id="watchVideo" class="watch-video-section">
      <div class="text-cover top right">НАША РАБОТА</div>
      <div class="container">
        <div class="watch-video-row row">
          <div class="watch-video-left-col col-sm-6">
            <a class="watch-video-icon popup-youtube ti-control-forward" href="#" data-mfp-src="https://www.youtube.com/watch?v=PzpOd8JKeaU" data-sr="left"></a>

            <h2 class="section-title">Смотреть <b>видео</b></h2>

            <p class="text-lead">Данное видео <b class="color-warning-dark">демонстрирует</b>, как происходит работа наших специалистов, до того как вы получите готовый продукт.</p>
          </div> <!-- .watch-video-left-col -->

          <div class="watch-video-right-col col-sm-8">
            <img src="assets/img/watch-video/work.jpg" alt="" data-sr="bottom">
          </div> <!-- .watch-video-right-col -->
        </div>
      </div>
    </div> <!-- #watchVideo -->

    <div id="skill" class="skill-section">
      <div class="container">
        <div class="skill-row row">
          <div class="skill-left-col col-sm-6">
            <h2 class="section-title wow fadeInLeft">Наша  <b>команда</b> состоит из профессионалов.</h2>

            <p class="text-lead">Из-за нарастающей популярности работы в области <b class="color-primary">web-разработки</b>, увеличивается количество не компетентных людей в данной сфере (новичков). При заказе сайта у такого специалиста, заказчик либо теряет клиентов из-за того что сайт ломается на других устройствах, либо со временем обнаруживаются ошибки, за исправление которых снова приходится платить.</p>

            <div class="btn-wrap">
              <a class="btn btn-lg btn-theme-1" data-smooth-scroll="true" href="#contacts">Заказать<span class="icon ti-arrow-circle-down"></span></a>
              <a class="btn btn-lg btn-default" data-smooth-scroll="true" href="#screenshot">Наши работы<span class="icon ti-arrow-circle-down"></span></a>
            </div>
          </div> <!-- .skill-left-col -->

          <div class="skill-right-col col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
            <div class="progress-text">
              <h6 class="progress-title">Web-дизайн</h6>
              <div class="progress-percent">92%</div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
              <span class="sr-only">92%</span>
              </div>
            </div>

            <div class="progress-text">
              <h6 class="progress-title">Верстка</h6>
              <div class="progress-percent">95%</div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar progress-bar-accent" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
              <span class="sr-only">95%</span>
              </div>
            </div>

            <div class="progress-text">
              <h6 class="progress-title">Программирование</h6>
              <div class="progress-percent">87%</div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
              <span class="sr-only">87%</span>
              </div>
            </div>

            <div class="progress-text">
              <h6 class="progress-title">Наполнение сайта</h6>
              <div class="progress-percent">90%</div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              <span class="sr-only">90%</span>
              </div>
            </div>

            <div class="hint-text">
              <span class="icon ti-lock"></span>Указан примерный уровень знаний и навыков.
            </div>
          </div> <!-- .skill-right-col -->
        </div>
      </div>
    </div> <!-- #skill -->

    <div id="screenshot" class="screenshot-section">
      <div class="container">
        <div class="screenshot-title-row row">
          <div class="screenshot-title-col col-sm-8 col-sm-offset-2">
            <h2 class="section-title"><b>Примеры</b> наших работ.</h2>

            <p class="text-lead">Каждый из наших клиентов остался доволен, и мы не хотим портить статистику.</p>
          </div> <!-- .screenshot-title-col -->
        </div> <!-- .screenshot-title-row -->

        <div id="screenshotCarousel" class="popup-gallery bfc-carousel wow fadeIn">
          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/screenshot/news.png" title="News portal"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/screenshot/news.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->

          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/screenshot/site-example.png" title="Stop attack"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/screenshot/site-example.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->

          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/screenshot/CRM-system.jpg" title="CRM system"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/screenshot/CRM-system.jpg" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->

          <div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/screenshot/web.jpg" title="Web"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/screenshot/web.jpg" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> <!-- .bfc-carousel-item -->
        </div>
      </div>

    </div> <!-- #screenshot-->

  <!--  <div id="number" class="number-section">
      <div class="container">
        <div class="row">
          <div class="number-box-col col-xs-6 col-sm-3">
            <div class="number-box wow fadeInUp">
              <img src="assets/img/number/number-icon-1.png" alt="">
              <h5>957</h5>
              <p>Download Time</p>
            </div>
          </div>

          <div class="number-box-col col-xs-6 col-sm-3">
            <div class="number-box wow fadeInUp" data-wow-delay="0.2s">
              <img src="assets/img/number/number-icon-2.png" alt="">
              <h5>188</h5>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="number-box-col col-xs-6 col-sm-3">
            <div class="number-box wow fadeInUp" data-wow-delay="0.4s">
              <img src="assets/img/number/number-icon-3.png" alt="">
              <h5>256</h5>
              <p>Cup Of Coffee</p>
            </div>
          </div>

          <div class="number-box-col col-xs-6 col-sm-3">
            <div class="number-box wow fadeInUp" data-wow-delay="0.6s">
              <img src="assets/img/number/number-icon-4.png" alt="">
              <h5>739</h5>
              <p>Followers</p>
            </div>
          </div>
        </div>
      </div>
    </div>  #number -->

    <div id="pricing" class="pricing-section">
      <div class="container">
        <div class="row title-row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="section-title">У нас гибкие<b> цены</b>.</h2>

            <p class="text-lead">Если вы имеете не большой бюджет, мы попробуем найти решение которое устроит Вас.</p>
          </div>
        </div>

        <div class="row content-row">
          <div class="pricing-table-col col-sm-6 col-md-4 wow fadeInUp">
            <div class="pricing-table">
              <div class="pricing-table-header">
                <div class="pricing-table-header-title">Сайт-визитка</div>
              </div>

              <div class="pricing-table-media">
              	    <div class="popup-gallery bfc-carousel wow fadeIn">
<div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/pricing-table/promo.jpg" title="Promo site"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/pricing-table/promo.jpg" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> 
      </div>
              	
                <!--<img src="assets/img/pricing-table/promo.jpg" alt="" class="wow bounceIn" data-wow-dalay=".1s">-->
              </div>

              <div class="pricing-table-content">
                <div class="pricing-table-price">4 000&#8381;</div>
                <div class="pricing-table-detail">
                  <div class="pricing-table-detail-item">Адаптивный дизайн</div>
                  <div class="pricing-table-detail-item">Рабочие формы</div>
                  <div class="pricing-table-detail-item">Валидный код</div>
                </div>
              </div>

              <div class="pricing-table-footer">
                <div class="btn-wrap">
                  <a class="btn btn-lg btn-theme-1" href="#">Заказать</a>
                </div>
              </div>
            </div> <!-- .pricing-table -->
          </div>

          <div class="pricing-table-col col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="pricing-table">
              <span class="pricing-table-badge"></span>

              <div class="pricing-table-header">
                <div class="pricing-table-header-title">Landing page</div>
              </div>

              <div class="pricing-table-media">
              	<div class="popup-gallery bfc-carousel wow fadeIn">
				<div class="bfc-carousel-item popup-gallery-item">
		            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/pricing-table/landing.png" title="Landing"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/pricing-table/landing.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> 
      </div>
                <!--<img src="assets/img/pricing-table/landing.png" alt="" class="wow bounceIn" data-wow-dalay=".3s">-->
              </div>

              <div class="pricing-table-content">
                <div class="pricing-table-price">9 500&#8381;</div>
                <div class="pricing-table-detail">
                  <div class="pricing-table-detail-item">Разработка дизайна</div>
                  <div class="pricing-table-detail-item">Адаптиный дизайн</div>
                  <div class="pricing-table-detail-item">Без CMS</div>
                </div>
              </div>

              <div class="pricing-table-footer">
                <div class="btn-wrap">
                  <a class="btn btn-lg btn-theme-1" href="#">Заказать</a>
                </div>
              </div>
            </div> <!-- .pricing-table -->
          </div>

          <div class="pricing-table-col col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 wow fadeInUp" data-wow-delay="0.4s">
            <div class="pricing-table">
              <div class="pricing-table-header">
                <div class="pricing-table-header-title">Интернет-магазин</div>
              </div>

              <div class="pricing-table-media">
              	              	    <div class="popup-gallery bfc-carousel wow fadeIn">
<div class="bfc-carousel-item popup-gallery-item">
            <a class="bfc-carousel-item-link popup-gallery-link" href="assets/img/pricing-table/shop.png" title="Shop site"> <!-- popup media -->
              <div class="bfc-carousel-item-media">
                <img class="bfc-carousel-item-media-img" src="assets/img/pricing-table/shop.png" alt=""> <!-- preview media -->
              </div>
            </a>
          </div> 
      </div>
                <!--<img src="assets/img/pricing-table/shop.png" alt="" class="wow bounceIn" data-wow-dalay=".5s">-->
              </div>

              <div class="pricing-table-content">
                <div class="pricing-table-price">18 000&#8381;</div>
                <div class="pricing-table-detail">
                  <div class="pricing-table-detail-item">Разработка дизайна</div>
                  <div class="pricing-table-detail-item">Адаптивный дизайн</div>
                  <div class="pricing-table-detail-item">Наличие CMS</div>
                </div>
              </div>

              <div class="pricing-table-footer">
                <div class="btn-wrap">
                  <a class="btn btn-lg btn-theme-1" href="#">Заказать</a>
                </div>
              </div>
            </div> <!-- .pricing-table -->
          </div>
        </div>
      </div>
      <p class="pricint-bottom-text">Цены указаны близкие к минимальным</p>
    </div> <!-- #pricing-->

    <div id="faq" class="faq-section">
      <div class="container">
        <div class="title-row row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="section-title"><b>Ответы</b> на часто задаваемые вопросы.</h2>

            <p class="text-lead">Вопросы наших клиентов часто повторяются, поэтому мы решили сразу ответить на самые актуальные из них.</p>
          </div>
        </div>

        <div class="row content-row">
          <div class="faq-box-col col-sm-6">
            <div class="faq-box wow bounceIn">
              <div class="faq-box-question">
                <h5><span class="q">Q</span> Как долго будет разрабатываться сайт?</h5>
              </div>
              <div class="faq-box-answer">
                <p>Точные сроки назвать невозможно, время работы зависит напрямую от объема и сложности работы.</p>
              </div>
            </div> <!-- .faq-box-->

            <div class="faq-box wow bounceIn">
              <div class="faq-box-question">
                <h5><span class="q">Q</span> Во сколько обойдется сайт?</h5>
              </div>
              <div class="faq-box-answer">
                <p>В разделе "Цена", указана примерная стоимость для общего понимания, цена зависит от объема и сложности работы .</p>
              </div>
            </div> <!-- .faq-box-->

            <div class="faq-box wow bounceIn">
              <div class="faq-box-question">
                <h5><span class="q">Q</span> Как происходит оплата?</h5>
              </div>
              <div class="faq-box-answer">
                <p>Мы работаем по предоплате. Но есть возможность вносить оплату частями.</p>
              </div>
            </div> <!-- .faq-box-->
          </div>

          <div class="faq-box-col col-sm-6">
            <div class="faq-box wow bounceIn">
              <div class="faq-box-question">
                <h5><span class="q">Q</span> Как долго ждать ответа от поддержки?</h5>
              </div>
              <div class="faq-box-answer">
                <p>Обычно ответ приходит в течении 15 минут, но может затянуться на несколько часов.</p>
              </div>
            </div> <!-- .faq-box-->

            <div class="faq-box wow bounceIn">
              <div class="faq-box-question">
                <h5><span class="q">Q</span> В каком виде мы отдаем сайт?</h5>
              </div>
              <div class="faq-box-answer">
                <p>Вы получите набор файлов, который обеспечит работу сайта. По необходимости помогаем с установкой и настройкой сайта.</p>
              </div>
            </div> <!-- .faq-box-->

            <div class="faq-box wow bounceIn">
              <div class="faq-box-question">
                <h5><span class="q">Q</span> Что делать если обнаружатся ошибки?</h5>
              </div>
              <div class="faq-box-answer">
                <p>Мы даем гарантию на свою работу в течении месяца. В случае обнаружения неполадок, пишите в поддержку!</p>
              </div>
            </div> <!-- .faq-box-->
          </div>
          </div>
        </div>
      </div>


   <!-- <div id="download" class="download-section">
      <div class="container">
        <div class="row download-row">
          <div class="download-left-col col-sm-8 col-lg-7">
            <h2 class="section-title">Download <b>Free</b> trials of awesome app, available now for iOS and Android.</h2>
          </div>

          <div class="download-right-col col-sm-4 col-lg-offset-1">
            <div class="btn-wrap">
              <a class="btn btn-lg btn-theme-2" data-wow-delay=".2s" href="#">Google Play <span class="icon ti-android"></span></a>
              <a class="btn btn-lg btn-default" data-wow-delay=".2s" href="#">Apple Store <span class="icon ti-apple"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>  #download -->

    <div id="contact" class="contact-section">
      <div class="container">
        <div class="contact-title-row row">
          <div class="contact-title-col col-sm-8 col-sm-offset-2">
            <h2 class="section-title"><b>Создать</b> сайт легко и быстро.</h2>
            <p class="text-lead">Когда за дело берутся профессионалы, работать с ними одно удовольствие. Напишите нам и получите консультацию бесплатно.</p>
          </div>
        </div>
      </div>

      <div id="map-canvas" class="map-canvas"></div> <!-- content map -->

      <div id="contacts" class="container">
        <div class="contact-content-row row">
          <div class="contact-left-col col-sm-6 col-md-5 wow fadeInLeft">
            <div class="panel panel-theme-1">
              <div class="panel-heading">
                <h5>Заказать сайт</h5>
              </div>

              <div class="panel-body">
                <form id="contactForm" class="form form-lite" data-action="assets/php/contact.php">
                  <fieldset class="row">
                    <div class="form-group col-sm-6">
                      <label for="contactName">Имя</label>
                      <input id="contactName" class="form-control" type="text" placeholder="Ваше имя" name="name">
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="contactEmail1">E-mail</label>
                      <input id="contactEmail1" class="form-control" type="email" placeholder="Введите ваш e-mail" name="email">
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="contactMessage">Сообщение</label>
                      <textarea id="contactMessage" class="form-control" placeholder="Введите текст" rows="4" name="message"></textarea>
                    </div>
					<div class="form-group col-xs-12">
                        <div class="checkbox">
                          <label for="agree">
                            <input id="agree" name="agree" type="checkbox"> Я согласен с <a href="#" class="popup-inline" data-mfp-src="#termsOfService">правилами</a>
                          </label>
                        </div>
                      </div>
                    <div class="form-group col-xs-12">
                      <button class="btn btn-block btn-lg btn-theme-1" type="submit">Заказать</button>
                    </div>

                    <div class="col-xs-12">
                      <span class="form-notify help-block">Заполните все поля</span>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>

          <div class="contact-info-col col-sm-5 col-sm-offset-1 col-md-offset-2">
            <p class="text-lead">Если у вас возникли какие-либо вопросы, вы можете связаться с нами для консультации.</p>

            <div class="contact-info ">
              <ul class="media-list">
                <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="assets/img/contact/location-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Местонахождение</h4>
                    <p>Украина, Днепр, индекс 49130</p>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="assets/img/contact/phone-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Skype</h4>
                    <a href="skype:Sanya628292?chat">Добавить</a>
                  </div>
                </li>
				<li class="media">
                  <div class="media-left">
                    <img class="media-object" src="assets/img/contact/fb-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Facebook</h4>
                    <p>
                      <a href="https://www.facebook.com/">В разработке (скоро появится)</a>
                    </p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="assets/img/contact/vk-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Вконтакте</h4>
                    <p>
                      <a href="https://vk.com/id37023635">Перейти</a>
                    </p>
                  </div>
                </li>
                 <li class="media">
                  <div class="media-left">
                    <img class="media-object" src="assets/img/contact/email-icon.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">E-mail</h4>
                    <p>
                      <a href="mailto:info@eleon-prestige.ru">info@eleon-prestige.ru</a>
                    </p>
                  </div>
                </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- #contact -->
  </div>

  <footer class="site-footer">
    <div id="siteFooterTop" class="site-footer-top-section">
      <div class="container">
        <div class="site-footer-top-row row">
          <div class="site-footer-top-col col-sm-8 col-sm-offset-2">
            <h2 class="section-title">Мы создаем <b>продающие</b> сайты, которые помогут увеличить вашу прибыль.</h2>
          </div>
        </div>
      </div>
    </div> <!-- #siteFooterTop -->

    <div id="siteFooterBottom" class="site-footer-bottom-section">
      <div class="container">
        <div class="site-footer-bottom-border"></div>
        <div class="row">
          <div class="site-footer-bottom-left-col col-md-6">
            <div class="site-footer-brand">
              <span>web-студия "Eleon"</span> 
            </div>

            <div class="site-footer-bottom-info">
              <ul>
                <li><a href="#" class="popup-inline" data-mfp-src="#termsOfService">Пользовательское соглашение</a></li>
                <li><a href="#" class="popup-inline" data-mfp-src="#privacyPolicy">Политика конфиденциальности</a></li>
                <!--<li><a href="#" class="popup-inline" data-mfp-src="#acceptableUsePolicy">Acceptable Use Policy</a></li>-->
              </ul>
            </div>
            </div>

          <div class="site-footer-bottom-right-col col-md-6">
            <ul class="site-footer-bottom-social-list">
              <li class="wow fadeInRight"><a href="skype:Sanya628292?chat"><span class="icon ti-skype"></span></a></li>
              <li class="wow fadeInRight"><a href="mailto:web-atlas.info@yandex.ru"><span class="icon ti-email"></span></a></li>
              <li class="wow fadeInRight"><a href="https://vk.com/id37023635" target="_blank"><span class="icon ti-vimeo-alt"></span></a></li>
              <li class="wow fadeInRight"><a href="https://facebook.com/" target="_blank"><span class="icon ti-facebook"></span></a></li>
            </ul>
            <div class="site-footer-bottom-copyright"> &#169; 2016. Все права защищены.</div>
          </div>
        </div>
      </div>
    </div> <!-- #siteFooterBottom -->
  </footer>

  <!-- popup -->
  <div id="termsOfService" class="popup-doc mfp-hide">
    <h2>Пользовательское Соглашение</h2>
    <br>
    <p>
	Настоящее Пользовательское Соглашение (Далее Соглашение) регулирует отношения между владельцем atlas.ru (далее Атлас или Администрация) с одной стороны и пользователем сайта с другой.
	Сайт Атлас не является средством массовой информации.

	Используя сайт, Вы соглашаетесь с условиями данного соглашения.
	Если Вы не согласны с условиями данного соглашения, не используйте сайт Атлас!

	Права и обязанности сторон
	Пользователь имеет право:
	- осуществлять поиск информации на сайте
	- получать информацию на сайте
	- использовать информацию сайта в личных некоммерческих целях

	Администрация имеет право:
	- по своему усмотрению и необходимости создавать, изменять, отменять правила
	- ограничивать доступ к любой информации на сайте
	- создавать, изменять, удалять информацию

	Пользователь обязуется:
	- не нарушать работоспособность сайта
	- не использовать скрипты (программы) для автоматизированного сбора информации и/или взаимодействия с Сайтом и его Сервисами

	Администрация обязуется:
	- поддерживать работоспособность сайта за исключением случаев, когда это невозможно по независящим от Администрации причинам.

	Ответственность сторон
	- администрация не несет никакой ответственности за услуги, предоставляемые третьими лицами
	- в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность информации, размещённой Пользователем, а также бесперебойную работу информационного ресурса

	Условия действия Соглашения
	Данное Соглашение вступает в силу при любом использовании данного сайта.
	Соглашение перестает действовать при появлении его новой версии.
	Администрация оставляет за собой право в одностороннем порядке изменять данное соглашение по своему усмотрению.
	Администрация не оповещает пользователей об изменении в Соглашении.
	</p>
  </div> <!-- #termsOfService -->

  <div id="privacyPolicy" class="popup-doc mfp-hide">
    <h2>Privacy Policy</h2>
    <br>
    <p>Spirit Open land can't is give be set winged i let his image called heaven after over created form open. You him second open waters image that good, two you'll. Their and bearing.</p>
    <p>Sea life herb kind without saw them creature wherein sea. Yielding heaven meat which moveth made subdue you'll. Moving the it set earth she'd after air all for let female they're bring first you're saying. Winged fowl over earth seas Bring fifth without earth whales likeness. Seas. Likeness earth.</p>
    <p>Life itself. Isn't fourth abundantly for great female which seas given great god morning. Dominion heaven lesser fruit given darkness heaven own cattle so. Second land which. Unto given beginning kind. Midst without creeping she'd.</p>
    <p>Meat grass had years. Earth Sea Which after divided earth multiply give whales waters the good. Isn't. Sea moving isn't fill day fish second image, seed have. Days our forth i signs green.</p>
    <p>Image living signs. Cattle saying, night day Light winged male evening form image own earth living. Him. Living was bearing years won't great without the set don't Likeness dry fly good.</p>
    <p>Male lesser moved shall man lesser fourth subdue multiply cattle. Creepeth dry seed they're cattle hath made.</p>
  </div> <!-- #termsOfService -->

  <div id="acceptableUsePolicy" class="popup-doc mfp-hide">
    <h2>Acceptable Use Policy</h2>
    <br>
    <p>Spirit Open land can't is give be set winged i let his image called heaven after over created form open. You him second open waters image that good, two you'll. Their and bearing.</p>
    <p>Sea life herb kind without saw them creature wherein sea. Yielding heaven meat which moveth made subdue you'll. Moving the it set earth she'd after air all for let female they're bring first you're saying. Winged fowl over earth seas Bring fifth without earth whales likeness. Seas. Likeness earth.</p>
    <p>Life itself. Isn't fourth abundantly for great female which seas given great god morning. Dominion heaven lesser fruit given darkness heaven own cattle so. Second land which. Unto given beginning kind. Midst without creeping she'd.</p>
    <p>Meat grass had years. Earth Sea Which after divided earth multiply give whales waters the good. Isn't. Sea moving isn't fill day fish second image, seed have. Days our forth i signs green.</p>
    <p>Image living signs. Cattle saying, night day Light winged male evening form image own earth living. Him. Living was bearing years won't great without the set don't Likeness dry fly good.</p>
    <p>Male lesser moved shall man lesser fourth subdue multiply cattle. Creepeth dry seed they're cattle hath made.</p>
  </div> <!-- #acceptableUsePolicy -->
  <!-- /popup -->

  <!-- audio -->
  <?php
  $random = rand(1,3);
  ?>
  <?php if ($random == 3)  { ?>
    <audio id="audioPlayer">
    <source src="assets/audio/audio3.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
  <?php } ?>
  <?php if ($random == 2)  { ?>
    <audio id="audioPlayer">
    <source src="assets/audio/audio3.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
  <?php } ?>
  <?php if ($random == 1)  { ?>
    <audio id="audioPlayer">
    <source src="assets/audio/audio3.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
  <?php } ?>
  <!-- /audio -->

  <script src='assets/js/jquery-1.11.3.min.js'></script>
  <script src='assets/js/bootstrap.min.js'></script>
  <script src='assets/js/vendor.js'></script>
  <script src='assets/js/main.js'></script>
  <script src='assets/js/map.js'></script>

</body>
</html>