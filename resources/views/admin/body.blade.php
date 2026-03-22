@extends('admin.index')
@section('content')
<div class="flex flex-col gap-8">
    <!-- Breadcrumb and Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Dashboard Overview</h2>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">Dashboard</span>
        </div>
    </div>

    <!-- Statistics Grid -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- New Clients -->
        <div class="glass-card p-6 flex flex-col gap-4 group hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <i class="icon-user-1 text-xl"></i>
                </div>
                <span class="text-3xl font-bold text-zinc-800">27</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-zinc-500 uppercase tracking-wider">New Clients</p>
                <div class="mt-2 w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                    <div class="h-full bg-sky-500 rounded-full" style="width: 30%"></div>
                </div>
            </div>
        </div>

        <!-- New Projects -->
        <div class="glass-card p-6 flex flex-col gap-4 group hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 rounded-2xl bg-violet-500/10 flex items-center justify-center text-violet-600 group-hover:bg-violet-500 group-hover:text-white transition-colors">
                    <i class="icon-contract text-xl"></i>
                </div>
                <span class="text-3xl font-bold text-zinc-800">375</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-zinc-500 uppercase tracking-wider">New Projects</p>
                <div class="mt-2 w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                    <div class="h-full bg-violet-500 rounded-full" style="width: 70%"></div>
                </div>
            </div>
        </div>

        <!-- New Invoices -->
        <div class="glass-card p-6 flex flex-col gap-4 group hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <i class="icon-paper-and-pencil text-xl"></i>
                </div>
                <span class="text-3xl font-bold text-zinc-800">140</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-zinc-500 uppercase tracking-wider">New Invoices</p>
                <div class="mt-2 w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                    <div class="h-full bg-emerald-500 rounded-full" style="width: 45%"></div>
                </div>
            </div>
        </div>

        <!-- All Projects -->
        <div class="glass-card p-6 flex flex-col gap-4 group hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 flex items-center justify-center text-amber-600 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                    <i class="icon-writing-whiteboard text-xl"></i>
                </div>
                <span class="text-3xl font-bold text-zinc-800">41</span>
            </div>
            <div>
                <p class="text-sm font-semibold text-zinc-500 uppercase tracking-wider">All Projects</p>
                <div class="mt-2 w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                    <div class="h-full bg-amber-500 rounded-full" style="width: 35%"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Charts Section -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <div class="lg:col-span-4 flex flex-col gap-6">
            <div class="glass-card p-6 min-h-[200px]">
                <canvas id="barChartExample1"></canvas>
            </div>
            <div class="glass-card p-6 min-h-[200px]">
                <canvas id="barChartExample2"></canvas>
            </div>
        </div>
        <div class="lg:col-span-8">
            <div class="glass-card p-6 h-full min-h-[425px]">
                <canvas id="lineCahrt"></canvas>
            </div>
        </div>
    </section>

    <!-- Detailed Stats Section -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="flex flex-col gap-6">
            <!-- Scans & Progress -->
            <div class="glass-card p-6 flex flex-col gap-6">
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2">
                            <div class="text-red-500 bg-red-500/10 p-2 rounded-lg"><i class="fa fa-caret-down"></i></div>
                            <strong class="text-xl text-zinc-800 font-outfit">5.657</strong>
                        </div>
                        <span class="text-xs font-semibold text-zinc-500 uppercase tracking-widest">Standard Scans</span>
                        <div class="w-full h-1.5 bg-zinc-200/50 rounded-full mt-1">
                            <div class="h-full bg-violet-500 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2">
                            <div class="text-emerald-500 bg-emerald-500/10 p-2 rounded-lg"><i class="fa fa-caret-up"></i></div>
                            <strong class="text-xl text-zinc-800 font-outfit">3.1459</strong>
                        </div>
                        <span class="text-xs font-semibold text-zinc-500 uppercase tracking-widest">Team Scans</span>
                        <div class="w-full h-1.5 bg-zinc-200/50 rounded-full mt-1">
                            <div class="h-full bg-emerald-500 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Requests & Threats -->
            <div class="glass-card p-6 grid grid-cols-2 gap-6 items-center">
                <div class="flex flex-col gap-2">
                    <strong class="text-3xl text-zinc-800 font-outfit">745</strong>
                    <span class="text-xs font-semibold text-zinc-500 uppercase tracking-widest">Total requests</span>
                    <div class="w-full h-1.5 bg-zinc-200/50 rounded-full mt-1">
                        <div class="h-full bg-sky-500 rounded-full" style="width: 35%"></div>
                    </div>
                </div>
                <div class="flex justify-around gap-4 text-center">
                    <div>
                        <strong class="block text-zinc-800">4.124</strong>
                        <span class="text-[10px] text-zinc-400 font-bold uppercase">Threats</span>
                        <p class="text-[10px] text-red-500 mt-1 font-semibold">+246</p>
                    </div>
                    <div class="w-px h-10 bg-white/20"></div>
                    <div>
                        <strong class="block text-zinc-800">2.147</strong>
                        <span class="text-[10px] text-zinc-400 font-bold uppercase">Neutral</span>
                        <p class="text-[10px] text-emerald-500 mt-1 font-semibold">+416</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="glass-card p-6">
            <canvas id="lineChart1"></canvas>
        </div>
    </section>
    <!-- Users & Contributions -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- 1st Place User -->
        <div class="glass-card p-8 flex flex-col items-center text-center gap-4 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-4">
                <span class="px-3 py-1 bg-violet-500 text-white text-[10px] font-bold rounded-full shadow-lg">1st PLACE</span>
            </div>
            <div class="w-24 h-24 rounded-full p-1 bg-gradient-to-tr from-admin-primary to-admin-secondary shadow-xl overflow-hidden ring-4 ring-white/20">
                <img src="{{ asset('admin/img/avatar-1.jpg') }}" alt="..." class="w-full h-full object-cover rounded-full">
            </div>
            <div>
                <h3 class="text-lg font-bold text-zinc-800 font-outfit uppercase tracking-tight">Richard Nevoreski</h3>
                <span class="text-xs text-zinc-400 font-medium tracking-wider">@richardnevo</span>
            </div>
            <p class="text-sm font-semibold text-zinc-500">950 Contributions</p>
            <div class="flex gap-4 w-full justify-center pt-4 border-t border-white/10">
                <div class="flex items-center gap-1.5"><i class="icon-info text-admin-primary"></i> <strong class="text-zinc-800">150</strong></div>
                <div class="flex items-center gap-1.5"><i class="fa fa-gg text-admin-secondary"></i> <strong class="text-zinc-800">340</strong></div>
                <div class="flex items-center gap-1.5"><i class="icon-flow-branch text-admin-accent"></i> <strong class="text-zinc-800">460</strong></div>
            </div>
        </div>

        <!-- 2nd Place User -->
        <div class="glass-card p-8 flex flex-col items-center text-center gap-4 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-4">
                <span class="px-3 py-1 bg-sky-500 text-white text-[10px] font-bold rounded-full shadow-lg">2nd PLACE</span>
            </div>
            <div class="w-24 h-24 rounded-full p-1 bg-gradient-to-tr from-sky-400 to-sky-600 shadow-xl overflow-hidden ring-4 ring-white/20">
                <img src="{{ asset('admin/img/avatar-4.jpg') }}" alt="..." class="w-full h-full object-cover rounded-full">
            </div>
            <div>
                <h3 class="text-lg font-bold text-zinc-800 font-outfit uppercase tracking-tight">Samuel Watson</h3>
                <span class="text-xs text-zinc-400 font-medium tracking-wider">@samwatson</span>
            </div>
            <p class="text-sm font-semibold text-zinc-500">772 Contributions</p>
            <div class="flex gap-4 w-full justify-center pt-4 border-t border-white/10">
                <div class="flex items-center gap-1.5"><i class="icon-info text-admin-primary"></i> <strong class="text-zinc-800">80</strong></div>
                <div class="flex items-center gap-1.5"><i class="fa fa-gg text-admin-secondary"></i> <strong class="text-zinc-800">420</strong></div>
                <div class="flex items-center gap-1.5"><i class="icon-flow-branch text-admin-accent"></i> <strong class="text-zinc-800">272</strong></div>
            </div>
        </div>

        <!-- 3rd Place User -->
        <div class="glass-card p-8 flex flex-col items-center text-center gap-4 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-4">
                <span class="px-3 py-1 bg-amber-500 text-white text-[10px] font-bold rounded-full shadow-lg">3rd PLACE</span>
            </div>
            <div class="w-24 h-24 rounded-full p-1 bg-gradient-to-tr from-amber-400 to-amber-600 shadow-xl overflow-hidden ring-4 ring-white/20">
                <img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="..." class="w-full h-full object-cover rounded-full">
            </div>
            <div>
                <h3 class="text-lg font-bold text-zinc-800 font-outfit uppercase tracking-tight">Sebastian Wood</h3>
                <span class="text-xs text-zinc-400 font-medium tracking-wider">@sebastian</span>
            </div>
            <p class="text-sm font-semibold text-zinc-500">620 Contributions</p>
            <div class="flex gap-4 w-full justify-center pt-4 border-t border-white/10">
                <div class="flex items-center gap-1.5"><i class="icon-info text-admin-primary"></i> <strong class="text-zinc-800">150</strong></div>
                <div class="flex items-center gap-1.5"><i class="fa fa-gg text-admin-secondary"></i> <strong class="text-zinc-800">280</strong></div>
                <div class="flex items-center gap-1.5"><i class="icon-flow-branch text-admin-accent"></i> <strong class="text-zinc-800">190</strong></div>
            </div>
        </div>
    </section>

    <!-- Activity Section -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="flex flex-col gap-6">
            <div class="glass-card overflow-hidden">
                <div class="p-6 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <strong class="text-sm font-bold text-zinc-800 uppercase tracking-widest font-outfit">Community Feed</strong>
                        <span class="text-[10px] font-bold text-zinc-400 uppercase">Top Trending</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between p-4 border-b border-white/10 hover:bg-white/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <span class="text-xs font-bold text-zinc-400">4th</span>
                                <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20"><img src="{{ asset('admin/img/avatar-1.jpg') }}" class="w-full h-full object-cover"></div>
                                <div><strong class="text-sm text-zinc-800">Tomas Hecktor</strong><span class="block text-[10px] text-zinc-400">@tomhecktor</span></div>
                            </div>
                            <div class="text-right"><span class="text-xs font-bold text-zinc-500">410 Contrib</span></div>
                        </div>
                        <div class="flex items-center justify-between p-4 border-b border-white/10 hover:bg-white/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <span class="text-xs font-bold text-zinc-400">5th</span>
                                <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20"><img src="{{ asset('admin/img/avatar-2.jpg') }}" class="w-full h-full object-cover"></div>
                                <div><strong class="text-sm text-zinc-800">Alexander Shelby</strong><span class="block text-[10px] text-zinc-400">@alexshelby</span></div>
                            </div>
                            <div class="text-right"><span class="text-xs font-bold text-zinc-500">320 Contrib</span></div>
                        </div>
                        <div class="flex items-center justify-between p-4 hover:bg-white/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <span class="text-xs font-bold text-zinc-400">6th</span>
                                <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20"><img src="{{ asset('admin/img/avatar-6.jpg') }}" class="w-full h-full object-cover"></div>
                                <div><strong class="text-sm text-zinc-800">Arther Kooper</strong><span class="block text-[10px] text-zinc-400">@artherkooper</span></div>
                            </div>
                            <div class="text-right"><span class="text-xs font-bold text-zinc-500">170 Contrib</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="glass-card p-6 flex flex-col gap-4">
                <div class="flex flex-col">
                    <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Sales Difference</strong>
                    <span class="text-[10px] text-zinc-400">Monthly overview</span>
                </div>
                <div class="flex items-end justify-between gap-4">
                    <div class="flex flex-col">
                        <strong class="text-2xl text-violet-600 font-outfit">$740</strong>
                        <span class="text-[10px] font-bold text-zinc-500 uppercase">May 2017</span>
                        <p class="text-[10px] text-zinc-400">320 Sales</p>
                    </div>
                    <div class="flex-1 max-w-[100px] h-12"><canvas id="salesBarChart1"></canvas></div>
                </div>
            </div>
            <div class="glass-card p-6 flex flex-col gap-4">
                <div class="flex flex-col">
                    <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Visit Statistics</strong>
                    <span class="text-[10px] text-zinc-400">Monthly overview</span>
                </div>
                <div class="flex items-end justify-between gap-4">
                    <div class="flex flex-col">
                        <strong class="text-2xl text-sky-500 font-outfit">$457</strong>
                        <span class="text-[10px] font-bold text-zinc-500 uppercase">May 2017</span>
                        <p class="text-[10px] text-zinc-400">210 Sales</p>
                    </div>
                    <div class="flex-1 max-w-[100px] h-12"><canvas id="visitPieChart"></canvas></div>
                </div>
            </div>
            <div class="glass-card p-6 lg:col-span-2 flex flex-col gap-4">
                <div class="flex flex-col">
                    <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Sales Activities</strong>
                    <span class="text-[10px] text-zinc-400">Monthly overview</span>
                </div>
                <div class="flex items-end justify-between gap-4">
                    <div class="flex flex-col">
                        <strong class="text-2xl text-emerald-500 font-outfit">80%</strong>
                        <span class="text-[10px] font-bold text-zinc-500 uppercase">May 2017</span>
                        <p class="text-[10px] text-zinc-400">+35 Sales</p>
                    </div>
                    <div class="flex-1 h-12"><canvas id="salesBarChart2"></canvas></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress & To-Do & Messages -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-6 pb-12">
        <!-- Progress Details -->
        <div class="lg:col-span-4 flex flex-col gap-6">
            <div class="glass-card p-6 flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Project Progress</strong>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-[10px] font-bold text-zinc-500 uppercase"><span>Task Alpha</span><span>80%</span></div>
                        <div class="w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                            <div class="h-full bg-admin-primary rounded-full transition-all duration-1000" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-[10px] font-bold text-zinc-500 uppercase"><span>Task Beta</span><span>40%</span></div>
                        <div class="w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                            <div class="h-full bg-admin-secondary rounded-full transition-all duration-1000" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-[10px] font-bold text-zinc-500 uppercase"><span>Task Gamma</span><span>60%</span></div>
                        <div class="w-full h-1.5 bg-zinc-200/50 rounded-full overflow-hidden">
                            <div class="h-full bg-admin-accent rounded-full transition-all duration-1000" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="glass-card p-6 flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Server Space</strong>
                    <span class="text-[10px] text-zinc-400">80GB / 120GB</span>
                </div>
                <div class="flex items-center justify-center p-4">
                    <div class="relative w-32 h-32">
                        <svg class="w-full h-full" viewBox="0 0 36 36">
                            <path class="text-zinc-200/30" stroke-width="3" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-admin-primary" stroke-width="3" stroke-dasharray="66, 100" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center flex-col">
                            <span class="text-xl font-bold text-zinc-800">66%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- To Do List -->
        <div class="lg:col-span-4 glass-card overflow-hidden">
            <div class="p-6 border-b border-white/10">
                <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">To Do List</strong>
            </div>
            <div class="p-2">
                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-white/50 transition-colors group">
                    <input type="checkbox" id="t1" class="w-5 h-5 rounded-lg border-zinc-300 text-admin-primary focus:ring-admin-primary/20">
                    <label for="t1" class="text-sm text-zinc-600 font-medium cursor-pointer group-hover:text-zinc-800 transition-colors">Finish the design of dashboard</label>
                </div>
                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-white/50 transition-colors group">
                    <input type="checkbox" id="t2" checked class="w-5 h-5 rounded-lg border-zinc-300 text-admin-primary focus:ring-admin-primary/20">
                    <label for="t2" class="text-sm text-zinc-400 font-medium line-through cursor-pointer">Implement new glassmorphism theme</label>
                </div>
                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-white/50 transition-colors group">
                    <input type="checkbox" id="t3" class="w-5 h-5 rounded-lg border-zinc-300 text-admin-primary focus:ring-admin-primary/20">
                    <label for="t3" class="text-sm text-zinc-600 font-medium cursor-pointer group-hover:text-zinc-800 transition-colors">Setup the hotel database</label>
                </div>
                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-white/50 transition-colors group">
                    <input type="checkbox" id="t4" class="w-5 h-5 rounded-lg border-zinc-300 text-admin-primary focus:ring-admin-primary/20">
                    <label for="t4" class="text-sm text-zinc-600 font-medium cursor-pointer group-hover:text-zinc-800 transition-colors">Connect API endpoints</label>
                </div>
            </div>
        </div>

        <!-- New Messages -->
        <div class="lg:col-span-4 glass-card overflow-hidden flex flex-col">
            <div class="p-6 border-b border-white/10 flex items-center justify-between">
                <strong class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">New Messages</strong>
                <span class="w-5 h-5 bg-admin-primary text-white text-[10px] flex items-center justify-center rounded-full font-bold">5</span>
            </div>
            <div class="overflow-y-auto max-h-[400px]">
                <div class="p-4 flex items-center gap-4 hover:bg-white/50 transition-colors border-b border-white/5 cursor-pointer">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20"><img src="{{ asset('admin/img/avatar-3.jpg') }}" class="w-full h-full object-cover"></div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-emerald-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <div class="flex items-center justify-between"><strong class="text-sm text-zinc-800">Nadia Halsey</strong><span class="text-[10px] text-zinc-400">09:30 AM</span></div>
                        <p class="text-xs text-zinc-500 truncate">Hey, can you help me with the new hotel...</p>
                    </div>
                </div>
                <div class="p-4 flex items-center gap-4 hover:bg-white/50 transition-colors border-b border-white/5 cursor-pointer">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20"><img src="{{ asset('admin/img/avatar-2.jpg') }}" class="w-full h-full object-cover"></div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-amber-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <div class="flex items-center justify-between"><strong class="text-sm text-zinc-800">Peter Ramsy</strong><span class="text-[10px] text-zinc-400">07:40 AM</span></div>
                        <p class="text-xs text-zinc-500 truncate">The booking for Room 102 needs review...</p>
                    </div>
                </div>
                <div class="p-4 flex items-center gap-4 hover:bg-white/50 transition-colors border-b border-white/5 cursor-pointer">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-xl overflow-hidden ring-2 ring-admin-primary/20"><img src="{{ asset('admin/img/avatar-1.jpg') }}" class="w-full h-full object-cover"></div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-red-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <div class="flex items-center justify-between"><strong class="text-sm text-zinc-800">Sam Kaheil</strong><span class="text-[10px] text-zinc-400">06:55 AM</span></div>
                        <p class="text-xs text-zinc-500 truncate">I've uploaded the new hotel gallery photos.</p>
                    </div>
                </div>
            </div>
            <a href="#" class="p-4 text-center text-[10px] font-bold text-admin-primary uppercase hover:bg-white/20 transition-colors mt-auto">View all messages</a>
        </div>
    </section>
</div>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Credit Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome1"></canvas>
                    <div class="text"><strong class="d-block">$2.145</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Channel Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome2"></canvas>
                    <div class="text"><strong class="d-block">$7.784</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Direct Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome3"></canvas>
                    <div class="text"><strong class="d-block">$4.957</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>