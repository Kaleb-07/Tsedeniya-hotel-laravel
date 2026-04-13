    <div class="d-flex align-items-stretch">
      <!-- Sidebar_Navigation-->
      <nav id="sidebar" class="glass-sidebar fixed left-4 top-24 bottom-4 w-64 rounded-3xl overflow-y-auto transition-all duration-300 z-50 hidden lg:block">
    <!-- Sidebar_Header-->
    <div class="p-6 flex items-center gap-4 border-b border-white/10">
        <div class="w-12 h-12 rounded-2xl overflow-hidden ring-2 ring-admin-primary/20">
            <img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="..." class="w-full h-full object-cover">
        </div>
        <div class="overflow-hidden">
            <h1 class="text-sm font-semibold text-zinc-800 truncate">Mark Stephen</h1>
            <p class="text-xs text-zinc-500 truncate">Administrator</p>
        </div>
    </div>
    
    <!-- Sidebar Navigation Menus-->
    <div class="p-4 flex flex-col gap-2">
        <span class="px-4 py-2 text-[10px] font-bold uppercase tracking-wider text-zinc-400">Main Menu</span>
        
        <ul class="flex flex-col gap-1 list-none p-0">
            <li>
                <a href="{{ url('home') }}" class="group flex items-center gap-3 px-4 py-3 rounded-2xl transition-all duration-200 hover:bg-white/50 {{ Request::is('home') || Request::is('admin/home') ? 'active-nav-link shadow-sm' : 'text-zinc-600' }}">
                    <i class="icon-home text-lg"></i>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
            </li>
            
            <li>
                <div x-data="{ open: {{ request()->is('create_room*') || request()->is('view_room*') ? 'true' : 'false' }} }" class="flex flex-col">
                    <button @click="open = !open" class="flex items-center justify-between gap-3 px-4 py-3 rounded-2xl text-zinc-600 transition-all duration-200 hover:bg-white/50">
                        <div class="flex items-center gap-3">
                            <i class="icon-windows text-lg"></i>
                            <span class="text-sm font-medium">Hotel Rooms</span>
                        </div>
                        <i class="fa fa-angle-right transition-transform" :class="open ? 'rotate-90' : ''"></i>
                    </button>
                    <div x-show="open" x-collapse class="pl-12 flex flex-col gap-1 mt-1">
                        <a href="{{ url('create_room') }}" class="py-2 text-sm {{ request()->is('create_room') ? 'text-admin-primary font-semibold' : 'text-zinc-500 hover:text-zinc-800' }}">Add Room</a>
                        <a href="{{ url('view_room') }}" class="py-2 text-sm {{ request()->is('view_room') ? 'text-admin-primary font-semibold' : 'text-zinc-500 hover:text-zinc-800' }}">View Rooms</a>
                    </div>
                </div>
            </li>
            
            <li>
                <a href="{{ url('view_booking') }}" class="group flex items-center gap-3 px-4 py-3 rounded-2xl transition-all duration-200 hover:bg-white/50 {{ request()->is('view_booking') ? 'active-nav-link shadow-sm' : 'text-zinc-600' }}">
                    <i class="fa fa-calendar-check-o text-lg"></i>
                    <span class="text-sm font-medium">Bookings</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('view_gallary') }}" class="group flex items-center gap-3 px-4 py-3 rounded-2xl transition-all duration-200 hover:bg-white/50 {{ request()->is('view_gallary') ? 'active-nav-link shadow-sm' : 'text-zinc-600' }}">
                    <i class="fa fa-image text-lg"></i>
                    <span class="text-sm font-medium">Gallery</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('all_message') }}" class="group flex items-center gap-3 px-4 py-3 rounded-2xl transition-all duration-200 hover:bg-white/50 {{ request()->is('all_message') ? 'active-nav-link shadow-sm' : 'text-zinc-600' }}">
                    <i class="fa fa-envelope-o text-lg"></i>
                    <span class="text-sm font-medium">Messages</span>
                </a>
            </li>
        </ul>
    </div>
</nav>