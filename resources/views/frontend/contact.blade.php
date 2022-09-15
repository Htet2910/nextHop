@extends('frontend.layouts.landing')

@section('content')
<main id="main">
  <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Contact</li>
        </ol>
        <h2>Contact Us</h2>

      </div>
 </section><!-- End Breadcrumbs --><br>
   <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
         @if(count($add)>0)
         <div class="col-lg-6">
            @foreach($add as $c)
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>{{$c->address}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{$c->email}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+95{{$c->phoneNo}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @else
           <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>
          </div>
          
          @endif

          <div class="col-lg-6">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
            @endif
            <form action="{{ url('/contact/send') }}" method="POST" role="form" class="php-email-forms">
              {{ csrf_field() }}
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="col form-group">
                  <input type="text" name="email" class="form-control" placeholder="Your Email" >
                </div>
              </div>
              <!-- <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div> -->
              <div class="form-group">
                <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
              </div>
             <!--  <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name="send" >Contact Us</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
 </main><br>
@endsection