  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo me-auto"><a href="index.html">Next Hop </a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto"><img src="{{asset('/img/logo.png')}}" alt=""></a> <!-- <h1 class="logo me-auto"><a href="index.html">Next Hop </a></h1> -->
      
       @if(count($nav)>0)
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul >
              <li ><a class="nav-link scrollto {{ Route::is('home') ? 'active' : '' }}" href="{{url('/')}}">{{trans('navbar.home')}}</a></li>
              @foreach($nav as $n)
              <li ><a class="nav-link scrollto {{ Route::is($n->nav_link) ? 'active' : '' }}" href="{{route($n->nav_link)}}">{{$n->nav_name}}</a></li>

             <!--  {{ request()->is('/'.$n->nav_link) ? 'active' : '' }} {{url('/'.$n->nav_link)}}
             <li><a class="nav-link scrollto" href="{{url('/about')}}">About</a></li>
              <li><a class="nav-link scrollto" href="{{url('/')}}">Partner</a></li>
              <li><a class="nav-link scrollto" href="{{url('/')}}">Services</a></li>
              <li><a href="{{url('/blog')}}">Blog</a></li>
               -->
              @endforeach
              <li><a class="nav-link scrollto {{ Route::is('frontend.contact') ? 'active' : '' }}" href="{{url('/contact')}}">{{trans('navbar.contact')}}</a></li>
              
              <li class="dropdown"><a href="#"><span>{{trans('navbar.language')}}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{url('/language?locale=en')}}">
                    <img src="{{asset('/img/eng.png')}}" style="width: 30px;height: 20px;">English
                  </a></li> 
                   <div class="dropdown-divider"></div>            
                  <li><a href="{{url('/language?locale=my')}}">
                    <img src="{{asset('/img/mya.png')}}" style="width: 30px;height: 20px;">Myanmar
                  </a></li> 
                </ul>
              </li>
             
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
      @else
           <nav id="navbar" class="navbar order-last order-lg-0">
            <ul >
              <li ><a class="nav-link scrollto {{ Route::is('home') ? 'active' : '' }}" href="{{url('/')}}">{{trans('navbar.home')}}</a></li>
              <li><a class="nav-link scrollto {{ Route::is('frontend.about') ? 'active' : '' }}" href="{{url('/about')}}">{{trans('navbar.about')}}</a></li>
              <li><a class="nav-link scrollto {{ Route::is('frontend.partner') ? 'active' : '' }}" href="{{url('/partner')}}">{{trans('navbar.partner')}}</a></li>
              <li><a class="nav-link scrollto {{ Route::is('frontend.services') ? 'active' : '' }}" href="{{url('/services')}}">{{trans('navbar.service')}}</a></li>
              <li><a class="nav-link scrollto {{ Route::is('frontend.blog') ? 'active' : '' }}" href="{{url('/blog')}}">BLOG</a></li>
              <li><a class="nav-link scrollto {{ Route::is('frontend.contact') ? 'active' : '' }}" href="{{url('/contact')}}">{{trans('navbar.contact')}}</a></li>
              <!-- <li><a class="nav-link scrollto " href="{{url('/')}}">Portfolio</a></li> -->
              <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
              
              <li class="dropdown"><a href="#"><span>{{trans('navbar.language')}}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{url('/language?locale=en')}}">
                    <img src="{{asset('/img/eng.png')}}" style="width: 30px;height: 20px;">English
                  </a></li> 
                   <div class="dropdown-divider"></div>            
                  <li><a href="{{url('/language?locale=my')}}">
                    <img src="{{asset('/img/mya.png')}}" style="width: 30px;height: 20px;">Myanmar
                  </a></li> 
                </ul>
              </li>
             
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          
      @endif

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
    </div>
  </header><!-- End Header -->