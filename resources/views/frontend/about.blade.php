@extends('frontend.layouts.landing')

@section('content')
  <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>About</li>
        </ol>
        <h2>About Us</h2>

      </div>
</section><!-- End Breadcrumbs --><br>
  <section id="about" class="about">
   <div class="container" data-aos="fade-up">
     @if(count($about_detail)>0)  
    	<div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                  @foreach($about_detail as $a)
                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                      <i class="bx bx-cube-alt"></i>
                      <h4>{{$a->title}}</h4>
                      <p>{{$a->body}}</p>
                    </div>
                    @endforeach
              </div>
            </div><!-- End .content-->
          </div>
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="member-img">
                <img src="assets/img/tabs-1.jpg" class="img-fluid">
            </div>
            <!-- <div class="content">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div> -->
          </div>
      </div>
       @else
        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Long Term Relationship</h4>
                  <p>Our mission is to become your trusted partner.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Results Orientated </h4>
                  <p>We aim to achieve customer’s goals no matter what.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Share your pain and solve problems </h4>
                  <p>We have same objective with you for every solution.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Optimistic</h4>
                  <p>We always think forward and look for a better way to do things.</p>
                </div>
                  <!-- <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a> -->
              </div>
            </div><!-- End .content-->
          </div>
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="member-img">
                <img src="assets/img/tabs-1.jpg" class="img-fluid">
            </div>
          </div>
          
        </div>
        @endif
 </div>
</section>
 <br>
@endsection