@extends("layouts.base")
@section("content")
	
	<!-- INNER CONTENT -->
	<section id="content">
		<div class="page_header page_header2 text-center">
			<h2>Testimonial</h2>
			<p>Get the best kit for smooth shave</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="testimonial" class="parallax-section">
						@foreach($ar as $one)
                           {{$one->name}}
						@endforeach
					</section>
				</div>
			</div>
		</div>
	</section>
	
	<div class="clearfix space70"></div>
	
	@endsection