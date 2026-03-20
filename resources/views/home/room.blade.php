<div class="our_room py-5">
         <div class="container">
            <!-- Header Section -->
            <div class="room-header-wrap">
               <div class="row align-items-end">
                  <div class="col-lg-8">
                     <h2 class="section-heading mb-0">Your Dream <span class="text-gold">Luxury</span> Hotel Rooms</h2>
                  </div>
                  <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                     <p class="text-muted mb-3">Immerse yourself in elegance with our world-class accommodations designed for ultimate comfort and style.</p>
                     <a href="{{url('our_rooms')}}" class="view-all-link">View All Rooms &rarr;</a>
                  </div>
               </div>
            </div>

            <!-- Rooms Grid -->
            <div class="room-grid">
               @foreach ($room as $rooms) 
               <div class="luxury-card">
                  <div class="card-image-wrap">
                     <img src="room/{{$rooms->image}}" alt="{{$rooms->room_title}}"/>
                  </div>
                  <div class="card-content">
                     <h3 class="room-title">{{$rooms->room_title}}</h3>
                     <div class="room-meta">
                        <span><i class="fa fa-bed"></i> King Bed</span> &bull; 
                        <span><i class="fa fa-expand"></i> 45m&sup2;</span> &bull; 
                        <span><i class="fa fa-users"></i> 2 Guests</span>
                     </div>
                     <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="price-tag">${{$rooms->price}} <span>/ night</span></div>
                           <a class="btn-luxury" href="{{url('room_details', $rooms->id)}}">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>

            <!-- Featured Visual Section (Bottom) -->
            <div class="row mt-5 pt-5">
               <div class="col-md-6 mb-4">
                  <div class="arched-image-wrap">
                     <img src="images/hero.png" alt="Luxury Experience">
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="arched-image-wrap">
                     <img src="images/hero.png" alt="Premium Comfort" style="object-position: bottom;">
                  </div>
               </div>
            </div>
         </div>
      </div>