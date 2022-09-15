@extends('frontend.layouts.landing')

@section('content')
<main id="main">
  <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Partner</li>
        </ol>
        <h2>Partner</h2>

      </div>
</section><!-- End Breadcrumbs --><br>
  <section id="clients" class="clients">
       <div class="section-title">
          <h2>Partner</h2>
      </div>
      <div class="container" data-aos="zoom-in">

        @if(count($partner_detail)>0)
        <div class="clients-slider swiper">
           
            <div class="swiper-wrapper align-items-center">
              @foreach($partner_detail as $p)
                <div class="swiper-slide"><img src="{{ URL::to('/') }}/uploadImg/partners/{{ $p->image }}" class="img-fluid" alt=""></div>
              @endforeach
            </div>
             <div class="swiper-pagination"></div>
        </div>

        @else
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/9.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        @endif

      </div>
    </section>
 </main><br>
@endsection