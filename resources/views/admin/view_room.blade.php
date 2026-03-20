@extends('admin.index')

@section('content')
<div class="flex flex-col gap-8">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Hotel Rooms List</h2>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">View Rooms</span>
        </div>
    </div>

    <!-- Table Container -->
    <div class="glass-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-white/20 border-b border-white/10">
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Room Title</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest hidden md:table-cell">Description</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Price</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Wifi</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Type</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Image</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @foreach($data as $room)
                    <tr class="hover:bg-white/30 transition-colors group">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-zinc-800">{{ $room->room_title }}</span>
                        </td>
                        <td class="px-6 py-4 hidden md:table-cell">
                            <span class="text-xs text-zinc-500">{!! Str::limit($room->description, 50) !!}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-bold text-admin-primary">${{ $room->price }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 {{ $room->wifi == 'yes' ? 'bg-emerald-500/10 text-emerald-600' : 'bg-red-500/10 text-red-600' }} rounded-md text-[10px] font-bold uppercase">{{ $room->wifi }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-medium text-zinc-600">{{ $room->room_type }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-16 h-12 rounded-lg overflow-hidden ring-2 ring-white/20">
                                <img src="{{ asset('room/'.$room->image) }}" class="w-full h-full object-cover">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ url('update_room/'.$room->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-amber-500/10 text-amber-600 hover:bg-amber-500 hover:text-white transition-all shadow-sm" title="Update">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this room?');" href="{{ url('delete_room/'.$room->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-500/10 text-red-600 hover:bg-red-500 hover:text-white transition-all shadow-sm" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Add any specific JS for this view if needed
</script>
@endsection