<x-layouts.main>
<x-navbar></x-navbar>
<x-slot:title>
	Services
</x-slot>

<div class="container">
	<div class="row">
		<div class="m-5"></div>
		<div class="separator"><h1 class=" text-muted text-uppercase m-2">Services</h1></div>
		<div class="col-md-8 mt-5 mb-5  p-5">
			<div class="row">
				@foreach($services as $service)
					<div class="col-md-6 ">
						<h1> {{ $service->title }}</h1>
						<video class="w-100" controls style="height: 210px; outline: none;">
                            <source src="{{ asset('myassets/videos/1.mp4')}}" type="video/mp4">
                        </video>
						<p class="text-muted text-center"></p>
						<span>
							<i class="fa fa-user"></i> Admin | 
							<i class="fa fa-calendar"></i> {{ $service->created_at }}  | 
							<i class="fa fa-eye"></i> {{ $service->view_counter }}
						<hr />
						</span>
					</div>
				@endforeach
			</div>
		</div>

		<div class="col-md-4 mt-5 mb-3 border rounded p-5 pt-0">
			<hr /><h3 class="text-center"><i class="fa fa-newspaper"></i> News</h3><hr />
			@foreach($recent_news as $news)
			<div class="row">
				<h5>{{ $news->title }}</h5>
				<hr />
				<img class="img-fluid" src="{{ asset('myassets/img/carousel-1.jpg')}}">
				<span class="m-2">
					<i class="fa fa-user"></i> Admin | 
					<i class="fa fa-calendar"></i> {{ $news->created_at }} | 
					<i class="fa fa-eye"></i> {{ $news->view_counter }}
				</span>
				<hr />
			</div>
			@endforeach
		</div>
	</div>
</div>

</x-layouts.main>