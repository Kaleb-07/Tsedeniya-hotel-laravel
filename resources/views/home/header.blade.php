         <!-- header inner -->
         <div class="header glass-nav sticky-top">
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-xl-3 col-lg-2">
                      <div class="logo">
                         <a href="{{url('/')}}"><img src="images/logo.png" alt="Hotel Logo" style="max-height: 50px;" /></a>
                      </div>
                   </div>
                   <div class="col-xl-9 col-lg-10">
                      <nav class="navigation navbar navbar-expand-lg navbar-light p-0">
                         <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars text-dark"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mx-auto">
                               <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                  <a class="nav-link" href="{{url('/')}}">Home</a>
                               </li>
                               <li class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
                                  <a class="nav-link" href="{{url('about')}}">About</a>
                               </li>
                               <li class="nav-item {{ Request::is('our_rooms*') ? 'active' : '' }}">
                                  <a class="nav-link" href="{{url('our_rooms')}}">Rooms</a>
                               </li>
                               <li class="nav-item {{ Request::is('gallary*') ? 'active' : '' }}">
                                  <a class="nav-link" href="{{route('gallary')}}">Gallery</a>
                               </li>
                               <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}">
                                  <a class="nav-link" href="{{route('contact')}}">Contact</a>
                               </li>
                            </ul>
                            
                            <div class="d-flex align-items-center ml-lg-4">
                               @if (Route::has('login'))
                                     @auth
                                           <a class="btn-luxury" style="padding: 8px 20px;" href="{{ url('/home') }}">Dashboard</a>
                                     @else
                                           <a class="btn-luxury border-0 text-dark" style="background: transparent; padding: 8px 15px;" href="{{ route('login') }}">Login</a>
                                           @if (Route::has('register'))
                                           <a class="btn-luxury ml-2" style="padding: 8px 20px;" href="{{ route('register') }}">Join Now</a>
                                           @endif
                                     @endauth
                               @endif
                            </div>
                         </div>
                      </nav>
                   </div>
                </div>
            </div>
         </div>