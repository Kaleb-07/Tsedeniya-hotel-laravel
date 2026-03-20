<!-- Hero Section (Tailwind) -->
      <div class="relative w-full min-h-[500px] lg:h-[80vh] bg-navy flex items-center justify-center overflow-visible">
         <!-- Overlay & Image -->
         <div class="absolute inset-0 z-[2] bg-gradient-to-t from-navy/90 via-navy/60 to-navy/40"></div>
         <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
              alt="Luxury Hotel Hero" 
              class="absolute inset-0 w-full h-full object-cover z-[1]">
         
         <!-- Content -->
         <div class="relative z-[3] text-center px-4 -mt-20 lg:mt-0">
               <h1 class="text-white text-5xl lg:text-7xl font-bold font-serif mb-4 leading-tight">
                  Rooms Listing 2
               </h1>
               <nav class="flex justify-center items-center space-x-2 text-white/70 text-sm uppercase tracking-[3px] font-medium">
                  <a href="{{url('/')}}" class="hover:text-gold transition-colors">Home</a>
                  <span>/</span>
                  <span class="text-gold">Rooms Listing 2</span>
               </nav>
         </div>

         <!-- Floating Booking Card (Tailwind) -->
         <div class="absolute -bottom-10 lg:-bottom-12 left-0 w-full z-10 px-4">
            <div class="container mx-auto max-w-7xl">
               <div class="bg-white rounded-lg shadow-2xl shadow-navy/20 overflow-hidden">
                  <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[repeat(5,1fr)_220px]">
                     <!-- Field 1 -->
                     <div class="relative p-7 border-b lg:border-b-0 lg:border-r border-gray-100 flex flex-col justify-center group">
                        <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 group-hover:text-gold transition-colors">Check In</label>
                        <div class="flex items-center justify-between">
                           <input type="text" class="bg-transparent border-0 p-0 text-sm md:text-base font-semibold text-navy focus:ring-0 w-full cursor-pointer placeholder-gray-300" placeholder="01/01/2026">
                           <i class="fa fa-chevron-down text-[10px] text-gold pointer-events-none"></i>
                        </div>
                     </div>
                     <!-- Field 2 -->
                     <div class="relative p-7 border-b lg:border-b-0 lg:border-r border-gray-100 flex flex-col justify-center group">
                        <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 group-hover:text-gold transition-colors">Check Out</label>
                        <div class="flex items-center justify-between">
                           <input type="text" class="bg-transparent border-0 p-0 text-sm md:text-base font-semibold text-navy focus:ring-0 w-full cursor-pointer placeholder-gray-300" placeholder="02/01/2026">
                           <i class="fa fa-chevron-down text-[10px] text-gold pointer-events-none"></i>
                        </div>
                     </div>
                     <!-- Field 3 -->
                     <div class="relative p-7 border-b lg:border-b-0 lg:border-r border-gray-100 flex flex-col justify-center group">
                        <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 group-hover:text-gold transition-colors">Adult</label>
                        <div class="flex items-center justify-between">
                           <select class="bg-transparent border-0 p-0 text-sm md:text-base font-semibold text-navy focus:ring-0 w-full cursor-pointer appearance-none">
                              <option>01</option>
                              <option>02</option>
                           </select>
                           <i class="fa fa-chevron-down text-[10px] text-gold pointer-events-none"></i>
                        </div>
                     </div>
                     <!-- Field 4 -->
                     <div class="relative p-7 border-b lg:border-b-0 lg:border-r border-gray-100 flex flex-col justify-center group">
                        <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 group-hover:text-gold transition-colors">Children</label>
                        <div class="flex items-center justify-between">
                           <select class="bg-transparent border-0 p-0 text-sm md:text-base font-semibold text-navy focus:ring-0 w-full cursor-pointer appearance-none">
                              <option>00</option>
                              <option>01</option>
                           </select>
                           <i class="fa fa-chevron-down text-[10px] text-gold pointer-events-none"></i>
                        </div>
                     </div>
                     <!-- Field 5 -->
                     <div class="relative p-7 border-b lg:border-b-0 lg:border-r border-gray-100 flex flex-col justify-center group">
                        <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 group-hover:text-gold transition-colors">Room</label>
                        <div class="flex items-center justify-between">
                           <select class="bg-transparent border-0 p-0 text-sm md:text-base font-semibold text-navy focus:ring-0 w-full cursor-pointer appearance-none">
                              <option>01</option>
                              <option>02</option>
                           </select>
                           <i class="fa fa-chevron-down text-[10px] text-gold pointer-events-none"></i>
                        </div>
                     </div>
                     <!-- Action Button -->
                     <button type="submit" class="bg-gold hover:bg-gold-dark text-navy font-extrabold text-xs lg:text-[11px] py-6 lg:py-0 px-8 transition-all active:scale-95 uppercase tracking-widest flex items-center justify-center whitespace-nowrap">
                        CHECK AVAILABILITY
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Hero Spacer -->
      <div class="h-24 lg:h-32"></div>