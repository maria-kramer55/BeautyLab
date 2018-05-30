@extends("layouts.base")
@section("content")
	<!-- SLIDER -->
	<div class="container-fluid no-padding">
		<div id="home-slider2" class="owl-carousel owl-theme">
			<div class="item">
				<img src="{{asset('images/slider/2/1.jpg')}}" class="img-responsive" alt=""/>
				<div class="container no-padding">
					<div class="hs-caption">
						<div class="caption-inner">
							<h4>Добро пожаловать в <span>BeautyLab</span></h4>
							<p>BeautyLab - это качественные услуги, отличный сервис, разумные цены и, конечно же, индивидуальный подход к нашим посетителям.
                            Уютная обстановка, радушный персонал, профессиональные мастера не оставят Вас равнодушными.</p>
							<br>
							<a href="#" class="button btn-xs btn-center color">Запись ONLINE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{asset('images/slider/2/2.jpg')}}" class="img-responsive" alt=""/>
				<div class="container no-padding">
					<div class="hs-caption">
						<div class="caption-inner">
							<h4>Добро пожаловать в <span>BeautyLab</span></h4>
							<p>BeautyLab - это качественные услуги, отличный сервис, разумные цены и, конечно же, индивидуальный подход к нашим посетителям.
                            Уютная обстановка, радушный персонал, профессиональные мастера не оставят Вас равнодушными.</p>
							<br>
							<a href="#" class="button btn-xs btn-center color">Запись ONLINE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{asset('images/slider/2/3.jpg')}}" class="img-responsive" alt=""/>
				<div class="container no-padding">
					<div class="hs-caption">
						<div class="caption-inner">
							<h4>Добро пожаловать в <span>BeautyLab</span></h4>
							<p>BeautyLab - это качественные услуги, отличный сервис, разумные цены и, конечно же, индивидуальный подход к нашим посетителям.
                            Уютная обстановка, радушный персонал, профессиональные мастера не оставят Вас равнодушными.</p>
							<br>
							<a href="#" class="button btn-xs btn-center color">Запись ONLINE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<section id="service" class="service">
		<div class="container">
			<div class="h-page-title">
				<h1>Услуги</h1>
				<span class="sub-title">the most popular</span>
				<div class="mustache">
					<span><img class="img-responsive" src="{{asset('images/home-page/cover.png')}}" alt=""></span>
				</div>
			</div>

			<div class="main-service">
				<div class="row">
					<div class="col-md-6 col-sm-6 service-left">
						<span class="ico"><img class="icon_1" src="{{asset('images/home-page/service-img1.png')}}" alt=""><img class="icon_2" src="images/home-page/hover-service-img1.png" alt=""></span>
						<div class="service-info">
							<h4>Стрижка</h4>
							<p>Любая стрижка – это как высокие каблуки для женщины. </p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 service-right">
						<span class="ico"><img class="icon_1" src="{{asset('images/home-page/service-img2.png')}}" alt=""><img class="icon_2" src="{{asset('images/home-page/hover-service-img2.png')}}" alt=""></span>
						<div class="service-info">
							<h4>Маникюр</h4>
							<p>Хороший маникюр - это важная составляющая имиджа каждой женщины.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 service-left">
						<span class="ico"><img class="icon_1" src="{{asset('images/home-page/service-img3.png')}}" alt=""><img class="icon_2" src="{{asset('images/home-page/hover-service-img3.png')}}" alt=""></span>
						<div class="service-info">
							<h4>Укладка</h4>
							<p>Прическа влияет на то, как складывается день, а в итоге и жизнь.</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 service-right">
						<span class="ico"><img class="icon_1" src="{{asset('images/home-page/service-img4.png')}}" alt=""><img class="icon_2" src="{{asset('images/home-page/hover-service-img4.png')}}" alt=""></span>
						<div class="service-info">
							<h4>Педикюр</h4>
							<p>Педикюр – это не просто приятная и полезная процедура для ног, это еще и отличное настроение, которое дарит яркий блестящий лак.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 service-left">
						<span class="ico"><img class="icon_1" src="{{asset('images/home-page/service-img5.png')}}" alt=""><img class="icon_2" src="{{asset('images/home-page/hover-service-img5.png')}}" alt=""></span>
						<div class="service-info">
							<h4>Окрашивание</h4>
							<p>Окрашивание волос – это возможность по-новому взглянуть на себя.</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 service-right">
						<span class="ico"><img class="icon_1" src="{{asset('images/home-page/service-img6.png')}}" alt=""><img class="icon_2" src="{{asset('images/home-page/hover-service-img6.png')}}" alt=""></span>
						<div class="service-info">
							<h4>Макияж</h4>
							<p>Макияж – это искусство, цель которого подчеркнуть все достоинство и скрыть недостатки.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- GALLERY -->
	<section id="gallery" class="gallery">
		<div class="container">
			<div class="h-page-title">
				<h1>галлерея</h1>
				<span class="sub-title">our works</span>
				<div class="mustache">
					<span><img class="img-responsive" src="{{asset('images/home-page/cover.png')}}" alt=""></span>
				</div>
			</div>
		</div>

		<div id="portfolio-gal">			
			<div class="col-md-12">
				<div class="portfolio-gal isotope">
					<div class="folio-item headshaves col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<a href="{{asset('images/portfolio/1/1.jpg')}}" class="pop_lbox">
								<div class="overlay-bg"></div>
								<img src="{{asset('images/home-page/projects/1.jpg')}}" class="img-responsive" alt=""/>
							</a>
							<div class="folio-border">
								<div class="folio-detail">
									<h5>Наши работы</h5>
									<h6>Работы мастеров BeautyLab</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="folio-item restyle col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<a href="images/portfolio/1/2.jpg" class="pop_lbox">
								<div class="overlay-bg"></div>
								<img src="{{asset('images/home-page/projects/2.jpg')}}" class="img-responsive" alt=""/>
							</a>
							<div class="folio-border">
								<div class="folio-detail">
									<h5>Наши мастера</h5>
									<h6>Отличная команда специалистов</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="folio-item manicure col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<a href="{{asset('images/portfolio/1/3.jpg')}}" class="pop_lbox">
								<div class="overlay-bg"></div>
								<img src="{{asset('images/home-page/projects/3.jpg')}}" class="img-responsive" alt=""/>
							</a>
							<div class="folio-border">
								<div class="folio-detail">
									<h5>Наш интерьер</h5>
									<h6>Уютная и приятная атмосфера</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="folio-item stubble col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<a href="{{asset('images/portfolio/1/4.jpg')}}" class="pop_lbox">
								<div class="overlay-bg"></div>
								<img src="{{asset('images/home-page/projects/4.jpg')}}" class="img-responsive" alt=""/>
							</a>
							<div class="folio-border">
								<div class="folio-detail">
									<h5>Наша витрина</h5>
									<h6>Только качественная продукция</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>

	<!-- PRICING -->
	<section id="pricing" class="pricing">
		<div class="pricing-bg">
			<div class="container">
				<div class="h-page-title">
					<h1>Акции</h1>
					<span class="sub-title">special offers</span>
					<div class="mustache">
						<span><img class="img-responsive" src="{{asset('images/home-page/cover.png')}}" alt=""></span>
					</div>
				</div>

				<div class="main-pricing">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="price-block">
								<div class="inner-price">
									<h3>Знакомство с мастером</h3>
									<h1>-15<span>%</span></h1>
									<p>Предлагаем скидку 15% на первое посещение у любого мастера, у которого вы еще не были!</p>						
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="price-block">
								<div class="inner-price">
									<h3>День Рождения</h3>
									<h1>-20<span>%</span></h1>
									<p>Каждый гость посетивший наш Салон красоты в свой День Рождения получит скидку 20% на все процедуры.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="price-block">
								<div class="inner-price">
									<h3>Счастливые часы</h3>
									<h1>-10<span>%</span></h1>
									<p>Счастливые часы в BeautyLab с понедельника по четверг с 9 до 14.00: скидка 10% на все услуги салона.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- STATS -->
	<section id="stats">
		<div class="stats">
			<div class="container">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h1>1500</h1>
					<img src="{{asset('images/women.png')}}" alt="">
					<h6>Клиентов</h6>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h1>490</h1>
					<img src="{{asset('images/чашка.png')}}" alt="">
					<h6>Чашек кофе</h6>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h1>2708</h1>
					<img src="{{asset('images/like.png')}}" alt="">
					<h6>Лайков</h6>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h1>1500</h1>
					<img src="{{asset('images/model.png')}}" alt="">
					<h6>Выходов в свет</h6>
				</div>
			</div>
		</div>
	</section>

	<section id="home-shop">
		<div class="container">
			<div class="col-md-12">
				<div class="h-page-title">
					<h1>Наши работы</h1>
					<span class="sub-title">examples</span>
					<div class="mustache">
						<span><img class="img-responsive" src="{{asset('images/home-page/cover.png')}}" alt=""></span>
					</div>
				</div>
<div class="clearfix space35"></div>

<div id="home-shop-carousel" class="owl-carousel owl-theme">
						<div class="sm-item text-center">
									<div class="product">
										<div class="product-thumb">
											<img src="{{asset('images/shop/1.jpg')}}" class="img-responsive" alt="">		
										</div>										
										<h2 class="product-title"><a href="#">Комбинированный маникюр с долговременным покрытием</a></h2>										
									</div>
								</div>
						<div class="sm-item text-center">
									<div class="product">
										<div class="product-thumb">
											<img src="{{asset('images/shop/2.jpg')}}" class="img-responsive" alt="">								
										</div>
										
										<h2 class="product-title"><a href="#">Сложное окрашивание и укладка</a></h2>									
									</div>
								</div>
						<div class="sm-item text-center">
									<div class="product">
										<div class="product-thumb">
											<img src="{{asset('images/shop/3.jpg')}}" class="img-responsive" alt="">
											
										</div>
										
										<h2 class="product-title"><a href="#">Наращивание ресниц 3D</a></h2>
										
									</div>
								</div>
						<div class="sm-item text-center">
									<div class="product">
										<div class="product-thumb">
											<img src="{{asset('images/shop/4.jpg')}}" class="img-responsive" alt="">
											
										</div>
										
										<h2 class="product-title"><a href="#">Женская стрижка и укладка</a></h2>
										
									</div>
								</div>
						<div class="sm-item text-center">
									<div class="product">
										<div class="product-thumb">
											<img src="{{asset('images/shop/5.jpg')}}" class="img-responsive" alt="">
											
										</div>
										
										<h2 class="product-title"><a href="#">Коррекция и окрашивание бровей</a></h2>
										
									</div>
								</div>
				</div>
			</div>
		</div>
	</section>
@endsection

	