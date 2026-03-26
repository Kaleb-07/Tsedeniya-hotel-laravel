         <!-- Top Bar -->
         <div class="hidden lg:block bg-navy text-white text-[13px] font-light py-2 border-b border-white/5">
            <div class="container mx-auto px-4">
               <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-6">
                     <span class="flex items-center gap-2">
                        <i class="fa fa-phone text-gold text-xs"></i> 
                        +(053)-987-3657
                     </span>
                     <span class="flex items-center gap-2">
                        <i class="fa fa-envelope text-gold text-xs"></i> 
                        tsedeniyahotel@gmail.com
                     </span>
                     <span class="flex items-center gap-2">
                        <i class="fa fa-map-marker text-gold text-xs"></i> 
                        25/2 Vokte Street Building Melborn City
                     </span>
                  </div>
                  <div class="flex items-center">
                     <span class="flex items-center gap-1 cursor-pointer hover:text-gold transition-colors">
                        <i class="fa fa-globe text-gold"></i> English 
                        <i class="fa fa-chevron-down text-[10px] ml-1"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>

         <!-- Main Navbar  -->
         <nav class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100 py-4">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                   <!-- Logo -->
                   <a class="flex items-center group no-underline" href="{{url('/')}}">
                      <div class="bg-gray-50 p-2 rounded-lg group-hover:bg-gold/10 transition-colors mr-3">
                         <i class="fa fa-building text-gold text-3xl"></i>
                      </div>
                      <div class="flex flex-col leading-tight">
                         <span class="text-2xl font-bold font-serif text-navy tracking-tight">Tsedeniya</span>
                         <span class="text-[9px] font-bold text-gray-400 tracking-[0.2em] uppercase">Hotel & Resort</span>
                      </div>
                   </a>

                   <!-- Nav Links -->
                   <div class="hidden lg:flex items-center space-x-8 font-medium text-navy text-sm tracking-wide">
                      <a class="hover:text-gold transition-colors {{ Request::is('/') ? 'text-gold' : '' }}" href="{{url('/')}}">HOME</a>
                      <a class="hover:text-gold transition-colors" href="{{url('/#about')}}">ABOUT</a>
                      <a class="hover:text-gold transition-colors {{ Request::is('our_rooms*') ? 'text-gold' : '' }}" href="{{route('our_rooms')}}">ROOMS</a>
                      <a class="hover:text-gold transition-colors" href="#">PAGES</a>
                      <a class="hover:text-gold transition-colors {{ Request::is('gallary*') ? 'text-gold' : '' }}" href="{{route('gallary')}}">BLOG</a>
                      <a class="hover:text-gold transition-colors {{ Request::is('contact*') ? 'text-gold' : '' }}" href="{{route('contact')}}">CONTACT</a>
                   </div>
                      
                   <!-- Actions -->
                   <div class="flex items-center space-x-5">
                      <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-100 text-gray-400 hover:border-gold hover:text-gold transition-all">
                         <i class="fa fa-search"></i>
                      </button>
                      @if (Route::has('login'))
                            @auth
                                  <a class="bg-gold hover:bg-gold-dark text-navy font-bold text-xs uppercase px-7 py-3 rounded group relative overflow-hidden transition-all shadow-md active:scale-95" href="{{ url('/home') }}">
                                     Dashboard
                                  </a>
                            @else
                                  <a class="bg-gold hover:bg-gold-dark text-black font-bold text-xs uppercase px-7 py-3.5 rounded transition-all shadow-lg shadow-gold/20 active:scale-95" href="{{ route('login') }}">
                                     BOOKING NOW
                                  </a>
                            @endauth
                      @endif

                      <!-- Mobile Menu Button -->
                      <button class="lg:hidden text-navy border-0 text-2xl" type="button" data-toggle="collapse" data-target="#navbarsExample04">
                         <span class="fa fa-bars"></span>
                      </button>
                   </div>
                </div>
            </div>
         </nav>
