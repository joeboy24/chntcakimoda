
@extends('layouts.app')


@section('navlist')

<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
<li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
<li class="nav-item"><a href="/news" class="nav-link">News</a></li>

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
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Goal -->
  <section class="my_section1 myBg">
    <div class="bg_overlay">
      <div class="blank_space2" style="height: 70px"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 goal_left">
            <h2>Our</h2>
            <h2>Goal</h2>
            {{-- <div class="blank_space" style="height: 30px"></div> --}}
            <p class="phone_globe"><i class="fa fa-globe"></i>&nbsp;&nbsp;{{ session('company')->website }}</p>
            {{-- <p class="phone_globe">{{ $company->name }}</p> --}}
          </div>

          <div class="col-md-9 goal_right">
            <h2>{{session('homepage')->goals_body}}</h2>
            <p class="phone_globe">{{ session('company')->name }}</p>
            <p class="phone_globe"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;{{ session('company')->contact }}</p>
          </div>
        </div>
      </div>
      <div class="blank_space2" style="height: 70px"></div>
    </div>
  </section>

  @if (count($about) > 0)
    <section class="ftco-section">
      <div class="container">
        <div class="row d-md-flex">
          {{-- <div class="col-md-3 ftco-animate img about-image order-md-first" style="background-image: url(/maindir/images/about.jpg);">
          </div> --}}
          <div class="col-md-9 offset-md-3 ftco-animate pr-md-5 order-md-last">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  @foreach ($about as $item)
                      @if ($y++ == 1)
                        <a class="nav-link active" id="linktab{{ $item->id }}" data-toggle="pill" href="#pills{{ $item->id }}" role="tab" aria-controls="pills2{{ $item->id }}" aria-selected="true">{{ $item->header }}</a>
                      @else
                        <a class="nav-link" id="linktab{{ $item->id }}" data-toggle="pill" href="#pills{{ $item->id }}" role="tab" aria-controls="pills2{{ $item->id }}" aria-selected="false">{{ $item->header }}</a>
                      @endif
                  @endforeach
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  @foreach ($about as $item)
                    @if ($z++ == 1)
                      <div class="tab-pane fade show active" id="pills{{ $item->id }}" role="tabpanel" aria-labelledby="pannel{{ $item->id }}">
                        <div><h2 class="mb-4">{{ $item->title }}</h2><p>{{ $item->text }}</p></div>
                      </div>
                    @else
                      <div class="tab-pane fade show" id="pills{{ $item->id }}" role="tabpanel" aria-labelledby="pannel{{ $item->id }}">
                        <div><h2 class="mb-4">{{ $item->title }}</h2><p>{{ $item->text }}</p></div>
                      </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  <!--Achievements-->
  <section class="ftco-section-2">
    <div class="container-wrap">
      <div class="row d-flex no-gutters">
        <div class="col-md-6 img" style="background-image: url(/storage/classified/system_use/0122_0e57098.jpg);">
        </div>
        <div class="col-md-6 d-flex">
          <div class="about-wrap">
            <div class="heading-section heading-section-white mb-5 ftco-animate">
              <h2 class="mb-2">Meet The Administration</h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>Well Experience Team</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>High Technology Facilities</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
            <div class="list-services d-flex ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-check2"></span>
              </div>
              <div class="text">
                <h3>Comfortable Clinics</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
