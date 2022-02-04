
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
      <div class="slider-item bread-item" style="background-image: url('/storage/classified/Nursing/img5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>News</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">{{$blog->title}}</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 ftco-animate">
            {{-- <h2 class="mb-3 mt-5">{{$blog->title}}</h2> --}}
            <p>
              <img src="/storage/classified/news_blog/{{$blog->dp}}" style="width: 100%" alt="" class="img-fluid">
            </p><br><br>
            <p>{{ $blog->text }}</p>
            @if ($blog->tags != '')
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  @for ($y = 0; $y < count($tags); $y++)
                    <a href="#" class="tag-cloud-link">{{ $tags[$y] }}</a>
                  @endfor
                </div>
              </div>
            @endif
            
            <!-- Blog Writter -->
            <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="/storage/classified/users/{{$blog->user->pass_photo}}" alt="Image placeholder" width="150px" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
                <h3>{{ $blog->user->name }}</h3>
                <p>Lorem ipsum dolor sit amet, autem necessitatibus voluptate quod mollitia delectus aut,inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>


            <div class="pt-5 mt-5">

              @include('inc.messages')
              
              @if (count($comments) > 0)
                @if (count($comments) == 1)
                  <h3 class="mb-5">{{ count($comments)}} Comment</h3>
                @else
                  <h3 class="mb-5">{{ count($comments)}} Comments</h3>
                @endif
                <ul class="comment-list">

                  @foreach ($comments as $comm)
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="/storage/classified/noimage3.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>{{ $comm->name }}</h3>
                        <div class="meta">{{ $comm->date_added }}</div>
                        <p>{{ $comm->message }}</p>
                        <p><a onclick="toggle_reply{{$comm->id}}()" class="reply">Reply</a></p>

                        <script>
                          function toggle_reply{{$comm->id}}() {
                            // alert("Works Perfect{{$comm->id}}");
                            document.getElementById("comm_reply{{$comm->id}}").style.display = "block";
                          }

                          function hide{{$comm->id}}() {
                            // alert("Works Perfect{{$comm->id}}");
                            document.getElementById("comm_reply{{$comm->id}}").style.display = "none";
                          }
                        </script>

                        <!-- SubComment Reply -->
                        <div class="comment-form-wrap pt-5 diplay_none" id="comm_reply{{$comm->id}}">
                          <h5 class="mb-5">Reply to {{$comm->name}} <a onclick="hide{{$comm->id}}()" class="reply float_right2">Hide</a></h5>
          
                          <form action="{{ action('DashController@store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="nb_id2" value="{{ $comm->id }}">
          
                            <div class="form-group">
                              <input type="text" name="name2" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                              <input type="email" name="email2" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                              <textarea name="message2" id="" cols="20" rows="3" class="form-control" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group">
                              <button type="submit" name="store_action" value="sub_comment" class="btn btn-primary py-3 px-5">Post Reply</button>
                            </div>
                          </form>
          
                        </div>

                      </div>

                      @foreach ($comm->subcomment as $sub_comm)
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="/storage/classified/noimage.jpg" style="width: 40px" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>{{ $sub_comm->name }}</h3>
                              <div class="meta">{{ $sub_comm->date_added }}</div>
                              <p>{{ $sub_comm->message }}</p>
                              <p><a onclick="toggle_reply2{{$sub_comm->id}}()" class="reply">Reply 2</a></p>

                              <script>
                                function toggle_reply2{{$sub_comm->id}}() {
                                  // alert("Works Perfect{{$sub_comm->id}}");
                                  document.getElementById("comm_reply2{{$sub_comm->id}}").style.display = "block";
                                }
      
                                function hide2{{$sub_comm->id}}() {
                                  // alert("Works Perfect{{$sub_comm->id}}");
                                  document.getElementById("comm_reply2{{$sub_comm->id}}").style.display = "none";
                                }
                              </script>


                              <!-- SubComment 2 Reply -->
                              <div class="comment-form-wrap pt-5 diplay_none" id="comm_reply2{{$sub_comm->id}}">
                                <h5 class="mb-5">Reply to {{$sub_comm->name}} <a onclick="hide2{{$sub_comm->id}}()" class="reply float_right2">Hide</a></h5>
                
                                <form action="{{ action('DashController@store') }}" method="POST">
                                  @csrf
                                  <input type="hidden" name="nb_id3" value="{{ $sub_comm->id }}">
                
                                  <div class="form-group">
                                    <input type="text" name="name3" class="form-control" placeholder="Your Name" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="email3" class="form-control" placeholder="Your Email">
                                  </div>
                                  <div class="form-group">
                                    <textarea name="message3" id="" cols="20" rows="3" class="form-control" placeholder="Message" required></textarea>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" name="store_action" value="sub_comment2" class="btn btn-primary py-3 px-5">Post Reply</button>
                                  </div>
                                </form>
                
                              </div>

                            </div>


                            @foreach ($sub_comm->subcomment2 as $last_comm)
                              <ul class="children">
                                <li class="comment">
                                  <div class="vcard bio">
                                    <img src="/storage/classified/noimage.jpg" style="width: 35px" alt="Image placeholder">
                                  </div>
                                  <div class="comment-body">
                                    <h3>{{ $last_comm->name }}</h3>
                                    <div class="meta">{{ $last_comm->date_added }}</div>
                                    <p>{{ $last_comm->message }}</p>
                                    {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                                  </div>

                                    {{-- <ul class="children">
                                      <li class="comment">
                                        <div class="vcard bio">
                                          <img src="/storage/classified/noimage.jpg" style="width: 40px" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                          <h3>John Doe</h3>
                                          <div class="meta">June 27, 2018 at 2:21pm</div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                          <p><a href="#" class="reply">Reply</a></p>
                                        </div>
                                      </li>
                                    </ul> --}}
                                </li>
                              </ul>
                            @endforeach

                          </li>
                        </ul>
                      @endforeach

                    </li>

                  @endforeach
                </ul>
              @endif
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>

                <form action="{{ action('DashController@store') }}" method="POST">
                  @csrf
		              <input type="hidden" name="nb_id" value="{{ $blog->id }}">

		              <div class="form-group">
		                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
		              </div>
		              <div class="form-group">
		                <input type="email" name="email" class="form-control" placeholder="Your Email">
		              </div>
		              {{-- <div class="form-group">
		                <input type="text" class="form-control" placeholder="Subject">
		              </div> --}}
		              <div class="form-group">
		                <textarea name="message" id="" cols="20" rows="4" class="form-control" placeholder="Message" required></textarea>
		              </div>
		              <div class="form-group">
		                <input type="submit" name="store_action" value="comment" class="btn btn-primary py-3 px-5">
		              </div>
		            </form>

              </div>
            </div>

          </div> <!-- .col-md-8 -->
					<div class="col-md-4 sidebar ftco-animate">
            {{-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                	<div class="icon"><span class="icon-search"></span></div>
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
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
  
              @if (count($blogs) != 0)
                @foreach ($blogs as $blog)
                  @if ($i++ < 4)
                    <div class="block-21 mb-4 d-flex">
                      <a href="/guestpages/{{ $blog->id }}" class="blog-img mr-4" style="background-image: url(/storage/classified/news_blog/{{$blog->dp}}); border-radius: 5px"></a>
                      <div class="text">
                        <h3 class="heading"><a href="/guestpages/{{ $blog->id }}"> {{ substr($blog->text, 0, 60) }}...</a></h3>
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

          </div>
				</div>
			</div>
		</section>
    
@endsection