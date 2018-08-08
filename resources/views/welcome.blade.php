<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123595772-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123595772-1');
      </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Абрис строй">

        <meta property="og:title" content="АБРИС СТРОЙ" />
        <meta property="og:description" content="Проектирование и монтаж линий электроснабжения" />
        <meta property="og:url" content="https://www.abris-bud.com.ua" />
        <meta property="og:image" content="/img/logo.png" />

        <title>Абрис-строй</title>

        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
              integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
              rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
              rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/creative.min.css" rel="stylesheet')}}">
    </head>
    <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container ">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Абрис-строй</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Услуги</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-primary d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>Проектирование и строительство линий электроснабжения</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">

                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Узнать больше</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">О нас</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">
                        ООО «Абрис Строй» предлагает весь спектр услуг по электроснабжению промышленных
                        и бытовых электроустановок:
                    </p>
                    <ul class="text-faded">
                        <li>Подготовка документации для получения технических условий, согласование
                            проектно-сметной документации, заключение договоров на электроснабжение в
                            ПАО «Запорожьеобленерго» и в других инстанциях
                        </li>
                        <li>Проектирование кабельных трасс (КЛ) напряжением 0,4-10 kВ</li>
                        <li>Проектирование воздушных линий (ВЛ) напряжением 0,4-10 kВ;</li>
                        <li>Проектирование сетей внутреннего электроснабжения</li>
                        <li>Расчет токов короткого замыкания</li>
                        <li>Расчет накрузок</li>
                        <li>Разработка сметной документации;</li>
                        <li>Монтаж новых и реконструкция существующих кабельных и воздушных линий
                            электропередач напряжением 0,4-10 кВ;
                        </li>
                        <li>Монтаж, модернизация и реконструкция трансформаторных подстанций 0,4 – 10
                            кВ;
                        </li>
                        <li>Организация расчетного учета</li>
                        <li>Монтаж внутреннего электроснабжения;</li>
                        <li>Согласование проектно-сметной документации во всех заинтересованных
                            инстанциях
                        </li>
                        <li>Ввод в эксплуатацию электроустановок</li>
                    </ul>
                    <p class="text-faded mb-4">Звоните, и мы начнем работу прямо сейчас!</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Начать!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Услуги</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 offset-lg-1 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-user-tie text-primary mb-3 sr-icons"></i>
                        <h5 class="mb-3">Бесплатная консультация специалиста</h5>
                        <p class="text-muted mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-handshake fa-4x text-primary mb-3 sr-icons"></i>
                        <h5 class="mb-3">Составление договора</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-file-alt fa-4x text-primary mb-3 sr-icons"></i>
                        <h5 class="mb-3">Составление тех. задания</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-briefcase fa-4x text-primary mb-3 sr-icons"></i>
                        <h5 class="mb-3">Разработка проектной документации</h5>
                    </div>
                </div>
              <!--  <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                        <h5 class="mb-3">Согласование проектной документации в органах экспертизы</h5>
                    </div>
                </div>-->
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-wallet fa-4x text-primary mb-3 sr-icons"></i>
                        <h5 class="mb-3">Окончательный расчет по договору</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>-->

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Скачать перечень документов</h2>
            <a download class="btn btn-light btn-xl sr-button" href="/downloads/Abris-bud.pdf">скачать</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Контакты!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Для связи с нами воспользуйтесь контактной информацией</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fas fa-phone fa-3x mb-3 sr-contact"></i>
                    <p>+38-066-26-75-159</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 sr-contact"></i>
                    <p>
                        <a href="mailto:abris.bud.zp@gmail.com">abris.bud.zp@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/creative.min.js')}}"></script>

    </body>

    </html>
