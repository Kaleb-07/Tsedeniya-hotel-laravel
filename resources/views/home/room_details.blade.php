<!DOCTYPE html>
<html lang="en">
   <!-- head -->
   <head>
      <base href="/public">
      @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header')
      </header>
      <div class="py-5 bg-light">
         <div class="container">
            <div class="row">
               <!-- Left Column: Room Info -->
               <div class="col-lg-8">
                  <img class="room-details-hero" src="/room/{{$room->image}}" alt="{{$room->room_title}}"/>
                  
                  <div class="bg-white p-4 p-md-5 rounded-lg shadow-sm">
                     <h2 class="section-heading mb-4">{{$room->room_title}}</h2>
                     <p class="text-muted mb-5 lead">{{$room->description}}</p>
                     
                     <div class="row">
                        <div class="col-md-12">
                           <h4 class="h5 mb-4 playfair">Premium Amenities</h4>
                           <div class="feature-list">
                              <div class="feature-item">
                                 <i class="fa fa-wifi"></i> Free High-Speed Wi-Fi
                              </div>
                              <div class="feature-item">
                                 <i class="fa fa-coffee"></i> Complimentary Breakfast
                              </div>
                              <div class="feature-item">
                                 <i class="fa fa-tv"></i> Smart TV & Netflix
                              </div>
                              <div class="feature-item">
                                 <i class="fa fa-snowflake-o"></i> Air Conditioning
                              </div>
                              <div class="feature-item">
                                 <i class="fa fa-bath"></i> Luxury Bathtub
                              </div>
                              <div class="feature-item">
                                 <i class="fa fa-shield"></i> In-room Safe
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="mt-4 pt-4 border-top">
                        <div class="row text-center">
                           <div class="col-4">
                              <p class="text-muted small mb-1">Room Type</p>
                              <h5 class="mb-0">{{$room->room_type}}</h5>
                           </div>
                           <div class="col-4">
                              <p class="text-muted small mb-1">Price Per Night</p>
                              <h5 class="mb-0 text-gold">${{$room->price}}</h5>
                           </div>
                           <div class="col-4">
                              <p class="text-muted small mb-1">Wi-Fi</p>
                              <h5 class="mb-0">{{$room->wifi}}</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Right Column: Booking Sidebar -->
               <div class="col-lg-4 mt-5 mt-lg-0">
                  <div class="booking-sidebar">
                     <h3>Reserve Your Stay</h3>
                     
                     @if(session()->has('message'))
                         <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm transition-smooth" role="alert">
                             {{ session()->get('message') }}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                         </div>
                     @endif
                     
                     @if($errors->any())
                         <div class="alert alert-danger border-0 shadow-sm small">
                             <ul class="mb-0">
                                 @foreach($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif

                     <form action="{{url('add_booking',$room->id)}}" method="post" class="mt-4">
                        @csrf
                        <div class="mb-1">
                           <label class="small text-muted mb-0">Full Name</label>
                           <input type="text" class="luxury-input mt-0" placeholder="Enter name" name="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif required>
                        </div>
                        <div class="mb-1">
                           <label class="small text-muted mb-0">Email Address</label>
                           <input type="email" class="luxury-input mt-0" placeholder="Enter email" name="email" @if(Auth::id()) value="{{Auth::user()->email}}" @endif required>
                        </div>
                        <div class="mb-1">
                           <label class="small text-muted mb-0">Phone Number</label> 
                           <input type="number" class="luxury-input mt-0" placeholder="Enter phone" name="phone" @if(Auth::id()) value="{{Auth::user()->phone}}" @endif required>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <label class="small text-muted mb-0">Check-in</label>
                              <input type="date" class="luxury-input mt-0" name="start_date" id="start_date" required>
                           </div>
                           <div class="col-6">
                              <label class="small text-muted mb-0">Check-out</label>
                              <input type="date" class="luxury-input mt-0" name="end_date" id="end_date" required>
                           </div>
                        </div>
                        <button type="submit" class="btn-luxury w-100 mt-4 p-3 shadow-sm">Confirm Booking</button>
                        <p class="text-center small text-muted mt-3 mb-0">No payment required now.</p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @include('home.footer')
      <!-- end footer -->
      <!-- Javascript files-->
       <script type="text/javascript">
        $(function(){
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10) month = '0' + month.toString();
            if(day < 10) day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            $('#start_date').attr('min', maxDate);
            $('#end_date').attr('min', maxDate);
        });
       </script>
   </body>
</html>