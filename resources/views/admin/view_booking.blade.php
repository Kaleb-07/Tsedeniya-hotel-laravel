@extends('admin.index')

@section('content')
<div class="flex flex-col gap-8">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Manage Bookings</h2>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">Bookings</span>
        </div>
    </div>

    <!-- Table Container -->
    <div class="glass-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-white/20 border-b border-white/10">
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Customer</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest hidden lg:table-cell">Contact</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Dates</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Room Info</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @foreach($data as $booking)
                    <tr class="hover:bg-white/30 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold text-zinc-800">{{ $booking->name }}</span>
                                <span class="text-[10px] text-zinc-400 font-bold uppercase tracking-tighter">ID: #{{ $booking->room_id }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 hidden lg:table-cell">
                            <div class="flex flex-col gap-1 text-xs text-zinc-500">
                                <span class="flex items-center gap-2"><i class="fa fa-envelope-o text-admin-primary"></i> {{ $booking->email }}</span>
                                <span class="flex items-center gap-2"><i class="fa fa-phone text-admin-primary"></i> {{ $booking->phone }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col text-xs font-medium">
                                <span class="text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded border border-emerald-100 w-fit mb-1">{{ $booking->start_date }}</span>
                                <span class="text-red-600 bg-red-50 px-1.5 py-0.5 rounded border border-red-100 w-fit">{{ $booking->end_date }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-10 rounded-lg overflow-hidden ring-2 ring-white/20 flex-shrink-0">
                                    <img src="{{ asset('room/'.$booking->room->image) }}" class="w-full h-full object-cover">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold text-zinc-800 truncate max-w-[120px]">{{ $booking->room->room_title }}</span>
                                    <span class="text-xs font-bold text-admin-primary tracking-tight">${{ $booking->room->price }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if($booking->status == 'Approved')
                                <span class="px-3 py-1 bg-emerald-500 text-white text-[10px] font-bold rounded-full shadow-lg shadow-emerald-500/20 uppercase tracking-widest">Approved</span>
                            @elseif($booking->status == 'Rejected')
                                <span class="px-3 py-1 bg-red-500 text-white text-[10px] font-bold rounded-full shadow-lg shadow-red-500/20 uppercase tracking-widest">Rejected</span>
                            @else
                                <span class="px-3 py-1 bg-amber-500 text-white text-[10px] font-bold rounded-full shadow-lg shadow-amber-500/20 uppercase tracking-widest">Pending</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2 pt-1">
                                <a href="{{ url('approve_book/'.$booking->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-600 hover:bg-emerald-500 hover:text-white transition-all shadow-sm" title="Approve">
                                    <i class="fa fa-check"></i>
                                </a>
                                <a href="{{ url('reject_book/'.$booking->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-amber-500/10 text-amber-600 hover:bg-amber-500 hover:text-white transition-all shadow-sm" title="Reject">
                                    <i class="fa fa-close"></i>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this booking?')" href="{{ url('delete_booking/'.$booking->id) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-500/10 text-red-600 hover:bg-red-500 hover:text-white transition-all shadow-sm" title="Delete">
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
@endsection