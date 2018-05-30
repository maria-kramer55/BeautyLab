@extends("layouts.base")
@section("content")

<section id="content">
        <div class="page_header page_header2 text-center">
			<h2>Маникюр и педикюр</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div id="blog-slider" class="owl-carousel owl-theme">
						<div class="item">						
							<img src="images/projects/1/2/1.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/2/2.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/2/3.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/2/4.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/2/5.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/2/6.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/2/7.jpg"  class="img-responsive" alt="">
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					<div class="fs-info">
						<h2><p>Наши руки всегда на виду. Ими мы делаем все основные дела и именно руки получают наибольшую порцию внешних воздействий. Резкие изменения погоды, бытовая химия, горячая и холодная вода – это факторы, которые ежедневно воздействуют на наши руки и которые не всегда благоприятно сказываются на их состоянии. Именно поэтому уход за руками требует времени и большого внимания.

Под действием внешних раздражителей, в первую очередь, страдает кожа рук и ногти. Основные проблемы, связанные с кожей на руках – это сухость, раздражительность, трещины, грубость. Ногти, под воздействием раздражителей, становятся мягкими и ломкими, появляются заусенцы. Чтобы наши руки выглядели аккуратно и красиво, необходим комплексный уход за ногтями и руками.</p></h2>
						
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
							<a href="{{ url('/works_haircolor') }}"><img src="images/projects/1/1/1.jpg" class="img-responsive" alt=""></a>
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