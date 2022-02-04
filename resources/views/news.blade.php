
@extends('layouts.app')


@section('navlist')
 
  <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
  <li class="nav-item active"><a href="/news" class="nav-link">News</a></li>
  <li class="nav-item dropdown"><a class="nav-link dropbtn">Portals</a>
    <div class="dropdown-content">
      <a href="/student_portal"><i class="fa fa-graduation-cap li_icon"></i>&nbsp; Student Portal</a>
      <a href="/staff_portal"><i class="fa fa-user-circle-o li_icon"></i>&nbsp;&nbsp; Staff Portal</a>
      <a href="/admin_portal"><i class="fa fa-unlock-alt li_icon"></i>&nbsp;&nbsp;&nbsp; Administration</a>
    </div>
  </li> 
  <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
  <li class="nav-item"><a href="/apply" class="nav-link">Apply</a></li>
  <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
	        
@endsection


@section('content')

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('/storage/classified/Nursing/img6.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>News</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Latest News</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">

						{{ $blogs->links() }}
						@if (count($blogs) != 0)
							@foreach ($blogs as $blog)
								<div class="col-md-12 ftco-animate">
									<div class="blog-entry">
										<a href="/guestpages/{{ $blog->id }}" class="block-20" style="background-image: url('/storage/classified/news_blog/{{$blog->dp}}');">
										</a>
										<div class="text d-flex py-4">
											<div class="meta mb-3">
												<div><a href="#">{{$blog->date_added}}</a></div>
												<div><a href="#">{{$blog->user->name}}</a></div>
												<div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{ count($blog->comment) }}</a></div>
											</div>
											<div class="desc pl-sm-3 pl-md-5">
												<h3 class="heading"><a href="#">{{$blog->title}}</a></h3>
												<p>{{ substr($blog->text, 0,150).'...' }}</p>
												<p><a href="/guestpages/{{ $blog->id }}" class="btn btn-primary btn-outline-primary">Read more</a></p>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					
						{{ $blogs->links() }}

					</div>
					
				</div> <!-- END: col-md-8 -->

				<div class="col-md-4 sidebar ftco-animate">

					{{-- <div class="sidebar-box">
						<form action="#" class="search-form">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
							</div>
						</form>
					</div> --}}

					<div class="sidebar-box ftco-animate">
						<div class="categories">
							<h3>Categories</h3>
							@foreach ($category as $cat)
								<li><a href="#">{{ $cat->category }} <span>+</span></a></li>
							@endforeach
							{{-- <li><a href="#">Food <span>(12)</span></a></li>
							<li><a href="#">Dish <span>(22)</span></a></li>
							<li><a href="#">Desserts <span>(37)</span></a></li>
							<li><a href="#">Drinks <span>(42)</span></a></li>
							<li><a href="#">Ocassion <span>(14)</span></a></li> --}}
						</div>
					</div>

					<div class="sidebar-box ftco-animate">
						<h3>Recent Blog</h3>

						@if (count($blogs) != 0)
							@foreach ($blogs as $blog)
								@if ($i++ < 4)
									<div class="block-21 mb-4 d-flex">
										<a href="/dash/{{ $blog->id }}" class="blog-img mr-4" style="background-image: url(/storage/classified/news_blog/{{$blog->dp}}); border-radius: 5px"></a>
										<div class="text">
											<h3 class="heading"><a href="/dash/{{ $blog->id }}"> {{ substr($blog->text, 0, 60) }}...</a></h3>
											<div class="meta">
												<div><a href="#"><span class="icon-calendar"></span> {{ $blog->date_added }}</a></div>
												<div><a href="#"><span class="icon-person"></span> {{ $blog->user->name }}</a></div>
												<div><a href="#"><span class="icon-chat"></span> {{ count($blog->comment) }}</a></div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						@endif

					</div>
						
					{{-- <div class="sidebar-box ftco-animate">
						<h3>Tags</h3>
						<div class="tagcloud">
						<a href="#" class="tag-cloud-link">dish</a>
						<a href="#" class="tag-cloud-link">menu</a>
						<a href="#" class="tag-cloud-link">food</a>
						<a href="#" class="tag-cloud-link">sweet</a>
						<a href="#" class="tag-cloud-link">tasty</a>
						<a href="#" class="tag-cloud-link">delicious</a>
						<a href="#" class="tag-cloud-link">desserts</a>
						<a href="#" class="tag-cloud-link">drinks</a>
						</div>
					</div> --}}

					{{-- <div class="sidebar-box ftco-animate">
						<h3>Paragraph</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
					</div> --}}
				</div>
			</div>
		</div>
	</section>
    
@endsection