@extends('frontend.layouts.landing')

@section('content')
<main id="main">
  <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Services</li>
        </ol>
        <h2>Services</h2>

      </div>
</section><!-- End Breadcrumbs --><br>
  <section id="services" class="services ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        @if(count($service_detail)>0)
         <div class="row">
          @foreach($service_detail as $s)
           <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <i class="bi bi-briefcase"></i> -->            
             <h3> <img src="{{ URL::to('/') }}/uploadImg/services/{{ $s->image }}" class="rounded-square"
                 style="width: 120px;height:80px;">
                 <a href="#"> {{$s->title}} </a></h3>
                 <p> {{$s->body}} </p>
            </div>
           </div>
          @endforeach 
        </div>
        @else
        <div class="row">
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <i class="bi bi-briefcase"></i> -->            
             <h3> <img src="assets/img/vc.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                 <a href="#"> Video Conferencing</a></h3>
              <p>
                
                - Polycom Video/Voice Conference Solutions<br>
                - Microsoft Teams<br>
                - Zoom Video Conferencing<br>
                - TrueConf software-based video conferencing server<br>
                - Logitech Conference Cam Solutions<br>
                - Aver Conference Solutions<br>
              
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <!-- <i class="bi bi-card-checklist"></i> -->
              <h3> <img src="assets/img/tv.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                <a href="#">Internet & Cloud Services</a></h3>
              <p>
                - Direct Internet Access<br>
                - Public IP <br>
                - Apps Visibility & Bandwidth Management<br>
                - VPS Hosting <br>
                - Web Hosting <br>
                - Mail Hosting <br>
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <!-- <i class="bi bi-binoculars"></i> -->
              <h3> <img src="assets/img/ssv.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                <a href="#">Information Security</a></h3>
              <p>
                - Next Generation Firewall<br>
                - Intrusion Prevention System <br>
                - Email Security & Web Application Firewall<br>
                - Secured Remote Access and VPN<br> 
                - Privilege Access Management and Vulnerability Management<br>
                - Security Incident & Event Management <br>
              </p>
            </div>
          </div>
           <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <!-- <i class="bi bi-bar-chart"></i> -->
              <h3>  <img src="assets/img/it.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                <a href="#">IT Infrastructure</a></h3>
                <p>
                - Enterprise Switching and Routing<br>
                - Wireless Networking<br>
                - Data Storage and Backup<br>
                - Enterprise Visibility & Data Capture<br>
                <br><br>
              </p>
            </div>
          </div>
         
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <!-- <i class="bi bi-calendar4-week"></i> -->
              <h3> <img src="assets/img/it.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                <a href="#">Managed Services</a></h3>
              <p>
                - IT Support Service <br>
                - On-site Professional Service <br>
                - Managed Network and Security Service <br>
              </p>
            </div>
          </div>
           <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <!-- <i class="bi bi-calendar4-week"></i> -->
              <h3> <img src="assets/img/ssv.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                <a href="#">Web Development</a></h3>
              <p>
                  - Web site / Web portal<br>
                  - ERP<br>
                  - Web Development
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <!-- <i class="bi bi-calendar4-week"></i> -->
              <h3> <img src="assets/img/dc.jpg" class="rounded-square"
                 style="width: 120px;height:80px;">
                <a href="#">Data Center</a></h3>
              <p>
                  - Modular Micro Data Center <br>
                  - Power & UPS <br>
                  - Network Performance Monitoring and Diagnostics <br>
                  - Server and Network Virtualization <br>
                  - Hyper-converged Infrastructure <br>
              </p>
            </div>
          </div>

           </div>
        @endif

      </div>
    </section><!-- End Services Section -->
 </main><br>
@endsection