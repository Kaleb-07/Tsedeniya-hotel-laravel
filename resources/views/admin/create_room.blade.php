@extends('admin.index')

@section('content')
<div class="flex flex-col gap-8 max-w-4xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Add New Room</h2>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">Create Room</span>
        </div>
    </div>

    <!-- Form Container -->
    <div class="glass-card p-8 lg:p-12">
        <form action="{{url('add_room')}}" method="post" enctype="multipart/form-data" class="space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Room Title -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Room Title</label>
                    <input type="text" name="room_title" id="room_title" placeholder="e.g. Deluxe Sea View" 
                           class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700">
                </div>

                <!-- Price -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Price per Night ($)</label>
                    <input type="text" name="price" id="price" placeholder="e.g. 250" 
                           class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700">
                </div>

                <!-- Room Type -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Room Type</label>
                    <select name="type" id="type" class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700 appearance-none">
                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>

                <!-- Free Wifi -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Free Wifi</label>
                    <select name="wifi" id="wifi" class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700 appearance-none">
                        <option selected value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>

            <!-- Description -->
            <div class="flex flex-col gap-2">
                <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Description</label>
                <textarea name="description" id="description" rows="5" placeholder="Describe the room features..." 
                          class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700 resize-none"></textarea>
            </div>

            <!-- Upload Image -->
            <div class="flex flex-col gap-2">
                <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Room Preview Image</label>
                <div class="relative group">
                    <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="w-full p-8 border-2 border-dashed border-white/20 rounded-2xl bg-white/10 group-hover:bg-white/20 transition-all flex flex-col items-center justify-center gap-2 text-zinc-500">
                        <i class="fa fa-image text-3xl mb-2"></i>
                        <span class="text-sm font-semibold">Click to upload image</span>
                        <span class="text-[10px] uppercase font-bold text-zinc-400">JPG, PNG or WEBP (Max 2MB)</span>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="pt-4">
                <button type="submit" class="w-full py-5 bg-admin-primary text-white text-sm font-bold uppercase tracking-widest rounded-2xl hover:opacity-90 transition-all shadow-xl shadow-admin-primary/20 flex items-center justify-center gap-3">
                    <i class="fa fa-plus-circle"></i> Create Room Entry
                </button>
            </div>
        </form>
    </div>
</div>
@endsection