<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BeautyLab | Responsive Multipurpose Salon Template</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="js/isotope/isotope.css">
    <link rel="stylesheet" href="js/flexslider/flexslider.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="js/superfish/css/megafish.css" media="screen">
    <link rel="stylesheet" href="js/superfish/css/superfish.css" media="screen">
    <link rel="stylesheet" href="js/pikaday/pikaday.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/light.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- JS Font Script -->
    <script src="http://use.edgefonts.net/bebas-neue.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizer -->
    <script src="js/modernizr.custom.js"></script>

</head>
<body class="multi-page">

<div id="wrapper" class="wrapper">
    <!-- HEADER -->
    <header id="header2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-5 logo">
                    <a href="{{ url('/welcome') }}"><img src="images/logo-dark.png" class="img-responsive" alt=""/></a>
                </div>
                <div class="col-md-9 col-xs-7">
                    <div class="top-bar">
                        <ul>
                            <li class="tb-info">
                                <a data-dialog2="somedialog2" class="trigger">
                                <i class="fa fa-map-marker"></i>
                                <span>г.Минск, ул.Немига 5<br><em>Google Map</em></span>
                                </a>                
                            </li>
                            <li class="tb-info">
                                <a data-dialog1="somedialog1" class="trigger">
                                <i class="fa fa-clock-o"></i>
                                <span class="hidden-xs">Время работы<br><em>Каждый день с 8.00 до 21.00</em></span>
                                <span class="visible-xs hidden-sm hidden-md hidden-lg">Open Timings</span>
                                </a>                
                            </li>
                            <li>
                                <a data-dialog="somedialog" class="trigger button btn-xs color">Запись online</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-wrap">
                <div id="mobnav-btn">Menu <i class="fa fa-bars"></i></div>
                <ul class="sf-menu">
                    <li>
                        <a href="{{ url('/welcome') }}">Основная</a>
                        <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                       
                    </li>
                    <li>
                        <a href="#">О салоне</a>
                        <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                        <ul>
                            <li><a href="{{ url('/stylists') }}">Наши мастера</a></li>
                            <li> <a class="sf-with-ul" href="{{ url('/workspace') }}">Наш интерьер</a> </li>
                            <li> <a class="sf-with-ul" href="{{ url('/works_haircolor')}}">Наши работы</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/services') }}">Услуги</a>
                        <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                       
                    </li>
                    <li>
                        <a href="{{ url('/price') }}">Прайс</a>
                        <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                        
                    </li>
                    <li class="sf-mmenu">
                        <a href="{{ url('/feedback') }}">Отзывы</a>
                        <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                       
                    </li>
                    
                    
                    <li>
                        <a href="{{ url('/contact') }}">Контакты</a>
                    </li>
                </ul>
                <div class="header-xtra">
                    
                    <div class="s-search">
                        <div class="ss-ico"><i class="fa fa-search"></i></div>
                        <div class="search-block">
                            <div class="ssc-inner">
                                <form action="{{asset('search')}}" metod="get">
                                    <input name="search" type="text" placeholder="Что ищем?">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="close-btn fa fa-times"></div>

     @yield('content')

    <!-- FOOTER -->
    <footer id="footer2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Спасибо за выбор BeautyLab!</h3>
                    
                    
                </div>

                

                

                <div class="col-md-3">
                    <img src="images/home-page/main-page-logo.png" class="img-responsive" alt=""/>
                </div>
            </div>
        </div>
        <div class="footer-bottom container">
            <div class="row">
                <div class="col-md-6">
                    <p>BeautyLab Minsk, 2018</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right">Design by <a target="_blank" href="https://github.com/maria-kramer55">student 614301 Maria Karabanovich</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->
</div>

<div id="somedialog" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div id="booking_pop" class="booking_pop">
            <h3>Запись ONLINE</h3>
            <form class="book_online" id="bookingForm" action="{{asset('book')}}" method="post">{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <label>ФИО <span>*</span></label>                                    
                        <input name="name" id="senderName2" type="text" required="required" />
                    </div>
                    <div class="col-md-6">
                        <label>E-mail <span>*</span></label>
                        <input type="email" name="email" id="senderEmail2" required="required"/>
                    </div>
                    <div class="col-md-6">
                        <label>Телефон <span>*</span></label>
                        <input name="number" id="number" type="text" required="required"/>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="datepicker-input col-md-7">
                                <label>Дата <span>*</span></label>
                                <input type="text" id="bookingDate" name="bookingDate" placeholder="mm/dd/yyyy" min="10" required="required"/>
                            </div>
                            <div class="time-picker col-md-5">
                                <label>Время <span>*</span></label>
                                <select class="selectbox-input" id="reservationtime" name="reservationtime" required="required"/>
                                    <option value="8:00">8:00</option>
                                    <option value="8:30">8:30</option>
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:30">18:30</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:30">19:30</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:30">20:30</option>
                                    <option value="21:00">21:00</option>
                                    <option value="21:30">21:30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <label>Сообщение <span>*</span></label>           
                        <textarea name="message2" id="message2" cols="6" rows="6" required="required"/></textarea>
                    </div>
                    <div class="col-md-5">
                        <button class="button btn-xs" id="submit">Записаться!</button>
                    </div>
                    <div class="col-md-7">
                        <p><em>*</em> Обязательные для заполнения поля</p>
                    </div>
                </div>
            </form>
            <div id="sendingMessage2" class="statusMessage2">
                <p><i class="fa fa-spin fa-spinner"></i> Идёт отправка, подождите пожалуйста...</p>
            </div>
            <div id="successMessage2" class="successmessage2">
                <p><i class="fa fa-check"></i> Спасибо за ваше сообщение! Ответим в кратчайшие сроки, ожидайте.</p>
            </div>
            <div id="failureMessage2" class="errormessage2">
                <p><i class="fa fa-close"></i> Возникла проблема при отправке сообщения. Попробуйте еще раз.</p>
            </div>
            <div id="incompleteMessage2" class="statusMessage2">
                <p><i class="fa fa-warning"></i>Пожалуйста, заполните все поля перед отправлением.</p>
            </div>

        </div>
        <button class="action b-close" data-dialog-close ><i class="fa fa-times"></i></button>
    </div>
</div>

<div id="somedialog1" class="dialog">
<div class="dialog__overlay"></div>
<div class="dialog__content">
    <div class="timer_popup">
        <div>
            <h3>Время работы</h3>
            <ul>
                <li>
                    <span class="week-day">Понедельник</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
                <li>
                    <span class="week-day">Вторник</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
                <li>
                    <span class="week-day">Среда</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
                <li>
                    <span class="week-day">Четверг</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
                <li>
                    <span class="week-day">Пятница</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
                <li>
                    <span class="week-day">Суббота</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
                <li>
                    <span class="week-day">Воскресенье</span>
                    <span class="week-time">8.00 - 21.00</span>
                </li>
            </ul>
        </div>
        <button class="action b-close" data-dialog-close ><i class="fa fa-times"></i></button>
    </div>
</div>
</div>


<div id="somedialog2" class="dialog">
<div class="dialog__overlay"></div>
<div class="dialog__content">
    <div class="contact-pop">
        <div class="row">
            <div class="col-md-6">
                <div id="map-pop"></div>
            </div>
            <div class="col-md-6 pop-contact">
                <ul class="contact-info">
                    <li>
                        <p><strong><i class="fa fa-map-marker"></i> Адрес:</strong> <span>г.Минск, ул.Немига 5</span></p>
                    </li>
                    <li>
                        <p><strong><i class="fa fa-envelope"></i> E-Mail:</strong> <span><a href="#">beautylab_mnsk@gmail.com</a></span></p>
                    </li>
                    <li>
                        <p><strong><i class="fa fa-phone"></i> Телефон:</strong> <span>+375(44)765-25-17</span></p>
                    </li>
                    
                </ul>
            </div>
        </div>
        <button class="action b-close" data-dialog-close ><i class="fa fa-times"></i></button>
    </div>
</div>
</div>

<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/navigation/jquery.easing.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/navigation/scroll.js"></script>
<script src="js/navigation/jquery.sticky.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/isotope/isotope.pkgd.js"></script>
<script src="js/superfish/js/hoverIntent.js"></script>
<script src="js/superfish/js/superfish.js"></script>
<script src="js/tweecool.js"></script>
<script src="js/jquery.bpopup.js"></script>
<script src="js/pikaday/pikaday.js"></script>
<script src="js/dialogFx.js"></script>
<script src="js/dialog-js.js"></script>
<script src="js/classie.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.prettyphoto.js"></script>
<script src="js/script.js"></script>
<script src="js/booking.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/gmap.js"></script>
<script src="js/gmap2.js"></script>

</body>
</html>