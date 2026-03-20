@extends('admin.index')

@section('content')
<div class="flex flex-col gap-8">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Customer Messages</h2>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">Messages</span>
        </div>
    </div>

    <!-- Table Container -->
    <div class="glass-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-white/20 border-b border-white/10">
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Customer</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Contact info</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Message Content</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-zinc-500 uppercase tracking-widest text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @foreach($data as $row)
                    <tr class="hover:bg-white/30 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-admin-primary/10 flex items-center justify-center text-admin-primary font-bold">
                                    {{ strtoupper(substr($row->name, 0, 1)) }}
                                </div>
                                <span class="text-sm font-semibold text-zinc-800">{{ $row->name }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col gap-1 text-xs text-zinc-500">
                                <span class="flex items-center gap-2"><i class="fa fa-envelope-o text-admin-primary/60"></i> {{ $row->email }}</span>
                                <span class="flex items-center gap-2"><i class="fa fa-phone text-admin-primary/60"></i> {{ $row->phone }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-xs text-zinc-600 leading-relaxed max-w-md line-clamp-2">
                                {{ $row->message }}
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center">
                                <a href="{{ url('send_email', $row->id) }}" class="flex items-center gap-2 px-4 py-2 bg-admin-primary/10 text-admin-primary text-[10px] font-bold uppercase tracking-widest rounded-lg hover:bg-admin-primary hover:text-white transition-all shadow-sm">
                                    <i class="fa fa-paper-plane"></i> Reply
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