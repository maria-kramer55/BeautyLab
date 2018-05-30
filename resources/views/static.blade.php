@extends('layouts.base')
@section('content')
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>{{$obj->name}}</h2>
					</div>
					<div class="col-md-12">
	{!!$obj->body!!}
					</div>
			</div>			
							
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="clearfix space70"></div>
	<div class="clearfix space70"></div>
	@endsection