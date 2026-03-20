@extends('admin.index')

@section('content')
<div class="flex flex-col gap-8">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Hotel Gallery</h2>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">Gallery</span>
        </div>
    </div>

    <!-- Upload Form -->
    <div class="glass-card p-8">
        <form action="{{url('upload_gallary')}}" method="post" enctype="multipart/form-data" class="flex flex-col md:flex-row items-end gap-6">
            @csrf
            <div class="flex-1 w-full">
                <label class="block text-xs font-bold text-zinc-800 uppercase tracking-widest mb-3 font-outfit">Upload New Image</label>
                <div class="relative group">
                    <input type="file" name="image" required class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div class="w-full p-4 border-2 border-dashed border-white/20 rounded-2xl bg-white/10 group-hover:bg-white/20 transition-all flex items-center justify-center gap-3 text-zinc-500">
                        <i class="fa fa-cloud-upload text-xl"></i>
                        <span class="text-sm font-medium">Click to select or drag and drop</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full md:w-auto px-8 py-4 bg-admin-primary text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:opacity-90 transition-all shadow-lg shadow-admin-primary/20">
                Add to Gallery
            </button>
        </form>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($gallary as $item)
        <div class="glass-card p-3 group relative overflow-hidden">
            <div class="aspect-square rounded-xl overflow-hidden mb-3 ring-2 ring-white/10 shadow-inner">
                <img src="{{asset('gallary/'.$item->image)}}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                <a onclick="return confirm('Are you sure you want to delete this image?');" href="{{url('delete_gallary/'.$item->id)}}" class="w-12 h-12 flex items-center justify-center bg-red-500 text-white rounded-2xl shadow-xl hover:scale-110 transition-transform">
                    <i class="fa fa-trash text-lg"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection