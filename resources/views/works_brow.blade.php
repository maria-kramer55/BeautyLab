@extends("layouts.base")
@section("content")

<section id="content">
        <div class="page_header page_header2 text-center">
			<h2>Моделирование бровей</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div id="blog-slider" class="owl-carousel owl-theme">
						<div class="item">						
							<img src="images/projects/1/4/1.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/4/2.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/4/3.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/4/4.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/4/5.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/4/6.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/4/7.jpg"  class="img-responsive" alt="">
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					<div class="fs-info">
						<h2><p>Визитной карточкой многих современных девушек являются привлекательные и ухоженные брови. Красиво очерченные, идеально подходящие к образу, они придают ему некую изюминку, делая взгляд выразительнее, а лицо – ярче. Всегда идеальное состояние данных участков красавицам помогает поддерживать художественное оформление бровей: что это такое — известно далеко не всем.
Сегодня бровям отводится важная эстетическая функция. Правильно оформленные участки способны кардинально преобразить ваше лицо.
Таким образом, уделив своим бровям должное внимание, вы станете выглядеть интереснее. Это гарантированно привлечет к вам немало мужского внимания и добавит уверенности в себе.

</p></h2>
						
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
							<a href="{{ url('/works_haircolor') }}"><img src="images/projects/1/1/1.jpg" class="img-responsive" alt="">
							<div class="overlay-folio2">
								<div class="project-info">
									<h2>Окрашивание</h2>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="project-item makeup shower">
					<a href="./service-single-slider.html">
						<div class="project-gal">
							<a href="{{ url('/works_nails') }}"><img src="images/projects/1/2/1.jpg" class="img-responsive" alt=""></a>
							<div class="overlay-folio2">
								<div class="project-info">
									<h2>Маникюр</h2>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="project-item photography beautyspa">
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