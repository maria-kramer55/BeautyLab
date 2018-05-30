@extends("layouts.base")
@section("content")
<section id="content">
        <div class="page_header page_header2 text-center">
			<h2>Макияж</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div id="blog-slider" class="owl-carousel owl-theme">
						<div class="item">						
							<img src="images/projects/1/5/1.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/5/2.jpg" class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/5/3.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/5/4.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/5/5.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/5/6.jpg"  class="img-responsive" alt="">
						</div>
						<div class="item">						
							<img src="images/projects/1/5/7.jpg"  class="img-responsive" alt="">
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					<div class="fs-info">
						<h2><p>Одно из направлений в нашем салоне – визаж. У нас работают настоящие профессиональные помощники, которые сделают все возможное, чтобы после их посещения, вы выглядели привлекательно и выигрышно при любых обстоятельствах.
В нашем салоне к визажу относятся не как к нанесению макияжа, а как к настоящему искусству. После косметической коррекции внешность наших гостей всегда претерпевает изменения к лучшему и это видно сразу.
Наши специалисты в области визаж выполняют очень творческую работу, результат которой в буквальном смысле отражается на вашем лице. Только наши мастера могут выгодно подчеркнуть вашу лучшие черты лица и при этом скрыть небольшие недостатки.
 
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
							<a href="{{ url('/works_brow') }}"><img src="images/projects/1/4/1.jpg" class="img-responsive" alt=""></a>
							<div class="overlay-folio2">
								<div class="project-info">
									<h2>Моделирование бровей</h2>
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