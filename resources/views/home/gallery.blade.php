      <div class="gallery-section bg-light">
         <div class="container">
            <div class="room-header-wrap text-center">
               <h2 class="section-heading">Glimpses of <span class="text-gold">Excellence</span></h2>
               <p class="text-muted mx-auto" style="max-width: 600px;">Take a visual journey through our stunning interiors and breathtaking landscapes.</p>
            </div>
            
            <div class="gallery-grid">
               @foreach ($gallary as $item)
               <div class="gallery-item">
                  <img src="/gallary/{{$item->image}}" alt="Hotel Gallery Image" />
                  <div class="gallery-overlay">
                     <h4 class="text-white">Luxury Stay</h4>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>