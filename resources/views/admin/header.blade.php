<header class="fixed top-4 left-4 right-4 h-16 bg-white/40 backdrop-blur-xl border border-white/20 rounded-2xl shadow-soft-xl flex items-center justify-between px-6 z-50">
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-gradient-to-br from-admin-primary to-admin-secondary rounded-lg flex items-center justify-center shadow-lg shadow-admin-primary/20">
                <span class="text-white font-bold text-xs">H</span>
            </div>
            <strong class="text-zinc-800 text-lg tracking-tight font-outfit uppercase">Hotel<span class="text-admin-primary">Admin</span></strong>
        </div>
        
        <div class="hidden md:flex ml-8 items-center gap-2 text-zinc-500">
            <span class="text-sm font-medium">Welcome back, {{ Auth::user()->name ?? 'Admin' }} 👋</span>
        </div>
    </div>

    <div class="flex items-center gap-4">
        <!-- Search -->
        <button class="w-10 h-10 flex items-center justify-center rounded-xl text-zinc-500 hover:bg-white/50 transition-colors">
            <i class="fa fa-search"></i>
        </button>

        <!-- Notifications -->
        <div class="relative group">
            <button class="w-10 h-10 flex items-center justify-center rounded-xl text-zinc-500 hover:bg-white/50 transition-colors">
                <i class="fa fa-bell-o"></i>
                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
            </button>
        </div>

        <!-- User_Profile -->
        <div class="flex items-center gap-3 pl-4 border-l border-white/20">
            <div class="hidden sm:block text-right">
                <p class="text-xs font-semibold text-zinc-800">{{ Auth::user()->name ?? 'Mark Stephen' }}</p>
                <p class="text-[10px] text-zinc-500 uppercase tracking-widest font-bold">Admin</p>
            </div>
            <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20">
                <img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="..." class="w-full h-full object-cover">
            </div>
            
            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <button type="submit" class="w-10 h-10 flex items-center justify-center rounded-xl text-red-500 hover:bg-red-50 transition-colors ml-2" title="Logout">
                    <i class="fa fa-sign-out text-lg"></i>
                </button>
            </form>
        </div>

        <!-- Mobile_Menu_Toggle -->
        <button class="lg:hidden w-10 h-10 flex items-center justify-center rounded-xl text-zinc-500 hover:bg-white/50 transition-colors ml-2">
            <i class="fa fa-bars text-lg"></i>
        </button>
    </div>
</header>