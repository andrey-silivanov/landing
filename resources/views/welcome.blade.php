<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123595772-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-123595772-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="проектирование и монтаж линий электроснабжения">
    <meta name="author" content="Абрис строй">

    <meta property="og:title" content="АБРИС СТРОЙ"/>
    <meta property="og:description" content="Проектирование и монтаж линий электроснабжения"/>
    <meta property="og:url" content="http://www.abris-bud.com.ua"/>
    <meta property="og:image" content="{{asset('img/logo.png')}}"/>

    <title>Абрис-строй</title>

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
    <style>

        .envelope-wrapper {
            display: none;
            text-align: center;

            align-items: flex-end;
            justify-content: center;

            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            font-size: 12px;
        }

        .envelope {
            width: 300px;
            height: 150px;
            background: #b49976;
            position: relative;
            transition: 0.7s linear;
        }

        .envelope.hide {
            visibility: hidden;
            opacity: 0;
            filter: alpha(opacity=0);

            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .envelope__check {
            height: 100%;
            width: 100%;
            z-index: 10;
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            margin: 0;
            cursor: pointer;
        }

        .envelope__check:checked ~ .envelope__flap {
            transition: z-index 0s 0.25s, -webkit-transform 0.25s 0s;
            transition: transform 0.25s 0s, z-index 0s 0.25s;
            transition: transform 0.25s 0s, z-index 0s 0.25s, -webkit-transform 0.25s 0s;
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
            z-index: 0;
        }

        .envelope__check:checked ~ .envelope__letter {
            -webkit-transform: translateY(-110%);
            transform: translateY(-110%);
            transition: z-index 0s 0.5s, -webkit-transform 0.25s 0.25s;
            transition: transform 0.25s 0.25s, z-index 0s 0.5s;
            transition: transform 0.25s 0.25s, z-index 0s 0.5s, -webkit-transform 0.25s 0.25s;
            z-index: 5;
        }

        .envelope__check:checked ~ .envelope__letter .letter__content:nth-child(2),
        .envelope__check:checked ~ .envelope__letter .letter__content:nth-child(3) {
            transition: -webkit-transform 0.25s 0.5s;
            transition: transform 0.25s 0.5s;
            transition: transform 0.25s 0.5s, -webkit-transform 0.25s 0.5s;
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
        }

        .envelope__flap {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 75%;
            transition: z-index 0s 0.5s, -webkit-transform 0.25s 0.5s;
            transition: transform 0.25s 0.5s, z-index 0s 0.5s;
            transition: transform 0.25s 0.5s, z-index 0s 0.5s, -webkit-transform 0.25s 0.5s;
            -webkit-transform-origin: top center;
            transform-origin: top center;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background: repeating-linear-gradient(-45deg, #c1ab8e, #c1ab8e 10px, #e74c3c 10px, #e74c3c 20px, #c1ab8e 20px, #c1ab8e 30px, #1e90ff 30px, #1e90ff 40px) 0 0/100% 5px no-repeat, #c1ab8e;
            z-index: 4;
            -webkit-clip-path: polygon(5% 40%, 50% 100%, 95% 40%, 100% 0, 0 0);
            clip-path: polygon(5% 40%, 50% 100%, 95% 40%, 100% 0, 0 0);
        }

        .envelope__flap--inside {
            background: #c1ab8e;
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
        }

        .envelope__back {
            height: 100%;
            width: 100%;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            background: repeating-linear-gradient(-45deg, #cebda6, #cebda6 10px, #e74c3c 10px, #e74c3c 20px, #cebda6 20px, #cebda6 30px, #1e90ff 30px, #1e90ff 40px) 0 100%/100% 5px no-repeat, repeating-linear-gradient(-45deg, #cebda6, #cebda6 10px, #e74c3c 10px, #e74c3c 20px, #cebda6 20px, #cebda6 30px, #1e90ff 30px, #1e90ff 40px) 0 100%/5px 100% no-repeat, repeating-linear-gradient(-45deg, #cebda6, #cebda6 10px, #e74c3c 10px, #e74c3c 20px, #cebda6 20px, #cebda6 30px, #1e90ff 30px, #1e90ff 40px) 100% 100%/5px 100% no-repeat, #cebda6;
            -webkit-clip-path: polygon(80% 40%, 100% 0, 100% 100%, 0 100%, 0 0, 20% 40%);
            clip-path: polygon(80% 40%, 100% 0, 100% 100%, 0 100%, 0 0, 20% 40%);
        }

        .envelope__back:after {
            height: 100%;
            width: 100%;
            background: repeating-linear-gradient(-45deg, #c7b49a, #c7b49a 10px, #e74c3c 10px, #e74c3c 20px, #c7b49a 20px, #c7b49a 30px, #1e90ff 30px, #1e90ff 40px) 0 100%/100% 5px no-repeat, #c7b49a;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            -webkit-clip-path: polygon(70% 10%, 100% 100%, 0 100%, 30% 10%);
            clip-path: polygon(70% 10%, 100% 100%, 0 100%, 30% 10%);
        }

        .envelope__letter {
            height: 90%;
            width: 90%;
            z-index: 1;
            position: absolute;
            left: 5%;
            top: 5%;
            transition: z-index 0s 0.25s, -webkit-transform 0.25s 0.25s;
            transition: transform 0.25s 0.25s, z-index 0s 0.25s;
            transition: transform 0.25s 0.25s, z-index 0s 0.25s, -webkit-transform 0.25s 0.25s;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .letter__content {
            height: 100%;
            width: 100%;
            background-color: #fff;
            top: 0;
            left: 0;
            position: absolute;
            padding: 14px;
            text-align: justify;
        }

        .letter__content:nth-child(2),
        .letter__content:nth-child(3) {
            transition: -webkit-transform 0.25s;
            transition: transform 0.25s;
            transition: transform 0.25s, -webkit-transform 0.25s;
            top: 100%;
            -webkit-transform-origin: top center;
            transform-origin: top center;
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            z-index: 2;
            border-top: 1px solid #eee;
        }

        .letter__content:nth-child(3) {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .sign-off {
            position: absolute;
            bottom: 12px;
            right: 12px;
            font-size: 20px;
            font-family: cursive;
            -webkit-transform: skewX(-20deg);
            transform: skewX(-20deg);
        }
    </style>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>
        {{--  <a download class="btn btn-light btn-xl sr-button" href="{{asset('downloads/Abris-bud.pdf')}}">скачать</a>--}}
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('sendMessage')}}" method="post" id="contactForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Оставьте ваши контактные данные</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-wrapper">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Укажите Ваше имя *</label>
                            <input type="text" name="name" class="form-control" id="name" required
                                   placeholder="Укажите Ваше имя">

                        </div>
                        <div class="form-group">
                            <label for="email">Укажите Ваш email *</label>
                            <input type="email" name="email" class="form-control" required id="email"
                                   placeholder="Укажите Ваш email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Телефон *</label>
                            <input type="text" name="phone" class="form-control" required id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="message">Сообщение</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>
                    </div>

                    {{-- Envelope--}}
                    <div >
                    <div class="envelope-wrapper row justify-content-center" style="height: 300px"">
                        <div class="envelope">
                            <input class="envelope__check" checked type="checkbox"/>
                            <div class="envelope__flap envelope__flap--inside"></div>
                            <div class="envelope__flap"></div>
                            <div class="envelope__letter">
                                <div class="letter">
                                    <div class="letter__content">
                                        <p>Hey! 👋</p>
                                        <p>The whole purpose of places like Starbucks is for people with no
                                            decision-making ability whatsoever to make six decisions just to buy one cup
                                            of coffee. Short, tall, light, dark, caf, decaf, low-fat, non-fat, etc.
                                            😕</p>
                                    </div>
                                    <div class="letter__content"></div>
                                    <div class="letter__content">
                                        <p>So people who don't know what the hell they're doing or who on earth they are
                                            can, for only $2.95, get not just a cup of coffee but an absolutely defining
                                            sense of self: Tall. Decaf. Cappuccino. ☕️</p><span
                                                class="sign-off">Joe Fox</span>
                                    </div>
                                </div>
                            </div>
                            <div class="envelope__back"></div>
                        </div>
                    </div>
                    </div>
                    {{-- end envelope --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
        </form>
    </div>
</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/creative.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
<script>
    $.extend($.validator.messages, {
        required: "Пожалуйста, заполните это поле",
        email: "Неверный формат"
    });

    var contactForm = $("#contactForm");
    contactForm.validate({
        errorPlacement: function (error, element) {
            var customError = $([
                '<span class="invalid-feedback d-block">',
                '  <span class="mb-0 d-block">',
                '  </span>',
                '</span>'
            ].join(""));

            // Add `form-error-message` class to the error element
            error.addClass("form-error-message");

            // Insert it inside the span that has `mb-0` class
            error.appendTo(customError.find("span.mb-0"));

            // Insert your custom error
            customError.insertAfter(element);
        },
    });

    $("#contactForm").on('submit', function (e) {
        e.preventDefault();
        $('.form-wrapper').css('display', 'none');
        var evenlop = $('.envelope-wrapper');
        evenlop.css('display', 'flex');

        setTimeout(function () {
            $('input:checkbox').removeAttr('checked');

            /*setTimeout(function () {
                $(".envelope").addClass('hide')
            }, 1500);*/

         /*   setTimeout(function () {
                $('#exampleModal').modal('hide')
            }, 2500);*/
        }, 500)
    })
</script>
</body>

</html>
