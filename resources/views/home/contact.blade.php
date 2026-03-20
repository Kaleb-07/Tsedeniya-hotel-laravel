<div class="contact-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="contact-card">
                     <h2 class="section-heading mb-4">Get in <span class="text-gold">Touch</span></h2>
                     <p class="text-muted mb-5">Have questions or special requests? Our dedicated team is here to assist you in planning your perfect stay.</p>
                     
                     @if(session()->has('message'))
                     <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                        <strong>Success!</strong> {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif

                     <form id="request" action="{{url('contact') }}" method="post">
                        @csrf
                        <div class="row">
                           <div class="col-md-12">
                              <input class="luxury-input" placeholder="Your Full Name" type="text" name="name" required> 
                           </div>
                           <div class="col-md-12">
                              <input class="luxury-input" placeholder="Email Address" type="email" name="email" required> 
                           </div>
                           <div class="col-md-12">
                              <input class="luxury-input" placeholder="Phone Number" type="number" name="phone" required>                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="luxury-input luxury-textarea" placeholder="How can we help you?" name="message" required></textarea>
                           </div>
                           <div class="col-md-12">
                              <button class="btn-luxury w-100" type="submit">Submit Inquiry</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="map-wrap">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="100%" height="100%" frameborder="0" style="border:0; min-height: 450px;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>