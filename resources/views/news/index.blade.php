<x-layouts.main>
<x-navbar></x-navbar>
<x-slot:title>
	News full
</x-slot>

<div class="container">
	<div class="row">
		<div class="m-5"></div>
		<div class="col-md-8 mt-5 mb-5  p-5">
			<img class="img-fluid" src="{{ asset('myassets/img/carousel-1.jpg')}}">
			<h1>{{ $news->title}}</h1>
			<hr />
			<p class="text-muted text-center">{{ $news->content}}</p>
			<hr />
			<span>
				<i class="fa fa-user"></i> Admin | 
				<i class="fa fa-calendar"></i> {{ $news->created_at}} | 
				<i class="fa fa-eye"></i> 128
			</span>
		</div>

		<div class="col-md-4 mt-5 mb-3 border rounded p-5 pt-0">
			<hr /><h3 class="text-center"><i class="fa fa-newspaper"></i> News</h3><hr />
			<div class="row">
			  @foreach($recent_news as $news)
				<h5>{{ $news->title}}</h5>
				<hr />
				<img class="img-fluid" src="{{ asset('myassets/img/carousel-1.jpg')}}">
				<span class="m-2">
					<i class="fa fa-user"></i> Admin | 
					<i class="fa fa-calendar"></i> {{ $news->created_at}} | 
					<i class="fa fa-eye"></i> 128
				</span>
				<hr />
			  @endforeach
			</div>
		</div>
	</div>
</div>

</x-layouts.main>