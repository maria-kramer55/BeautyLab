@extends("layouts.base")
@section("content")

<section id="content">
       <div class="page_header page_header2 text-center">
			<h2>Окрашивание</h2>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div id="blog-slider" class="owl-carousel owl-theme">
						<div class="item">						
							<img src="images/projects/1/1/1.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/1/2.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/1/3.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/1/4.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/1/5.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/1/6.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/1/7.jpg"  class="img-responsive" alt="">
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					<div class="fs-info">
						<h2><p>Практически каждая вторая жительница планеты хотя бы раз в жизни меняла цвет волос. И не случайно! Психологу утверждают, что те из нас, кто хочет скорейших перемен в жизни, отправляются в салон красоты к стилисту по окрашиванию волос. И порой жизнь некоторых, действительно, круто меняется!
Модное окрашивание, мелирование, блондирование, колорирование – в нашем салоне мастера и стилисты работают с самыми инновационными и качественными красителями последнего поколения, которые воздействуют на структуру волоса очень мягко, но эффективно. Разнообразная палитра красок, шелковистость и мягкость волос, их здоровый блеск и ухоженный вид вряд ли оставят вас равнодушной.
Мастера салона красоты BeautyLab подберут для вас идеальный цвет и выберут необходимый вид окрашивания в зависимости от вашего цветотипа, пожеланий и настроения.
Мы прекрасно владеем всеми модными техниками, наши мастера постоянно повышают свое мастерство, отталкиваясь от последних тенденций в мире окрашивания и красоты - омбре, балаяж, бронд.</p></h2>
						
						<div class="clearfix space20"></div>
					</div>
				</div>
			</div>
			<div class="clearfix space30"></div>
			<h4 class="heading">Другие услуги</h4>
			<hr>
			<div id="portfolio-home" class="isotope gutter folio-boxed-4col">
				<div class="project-item makeup beautyspa makeup">
						<div class="project-gal">
							<a href="{{url('/works_nails')}}"><img src="images/projects/1/2/1.jpg" class="img-responsive" alt=""></a>
							<div class="overlay-folio2">
								<div class="project-info">
									<a href="{{url('/works_nails')}}"><h2>Манкюр</h2></a>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="project-item makeup shower">
					<a href="./service-single-slider.html">
						<div class="project-gal">
							<a href="{{ url('/works_lash') }}"><img src="images/projects/1/3/1.jpg" class="img-responsive" alt=""></a>
							<div class="overlay-folio2">
								<div class="project-info">
									<h2>Наращивание ресниц</h2>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="project-item photography beautyspa">
					<a href="./service-single-slider.html">
						<div class="project-gal">
							<a href="{{ url('/works_brow') }}"><img src="images/projects/1/4/1.jpg" class="img-responsive" alt=""></a>
							<div class="overlay-folio2">
								<div class="project-info">
									<h2>Моделирование бровей</h2>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="project-item photography coloring">
					<a href="./service-single-slider.html">
						<div class="project-gal">
							<a href="{{ url('/works_makeup') }}"><img src="images/projects/1/5/1.jpg" class="img-responsive" alt=""></a>
							<div class="overlay-folio2">
								<div class="project-info">
									<h2>Макияж</h2>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	
	<div class="clearfix space70"></div>

	@endsection