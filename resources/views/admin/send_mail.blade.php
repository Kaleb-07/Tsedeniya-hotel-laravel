@extends('admin.index')

@section('content')
<div class="flex flex-col gap-8 max-w-4xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div class="flex flex-col">
            <h2 class="text-2xl font-bold text-zinc-800 font-outfit uppercase tracking-tight">Compose Email</h2>
            <p class="text-xs text-zinc-500 font-medium mt-1">Sending to: <span class="text-admin-primary font-bold">{{$data->name}}</span> ({{$data->email}})</p>
        </div>
        <div class="text-xs text-zinc-500 font-medium">
            Admin / <span class="text-admin-primary">Send Email</span>
        </div>
    </div>

    <!-- Form Container -->
    <div class="glass-card p-8 lg:p-12">
        <form action="{{url('mail', $data->id)}}" method="post" enctype="multipart/form-data" class="space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Greeting -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Greeting</label>
                    <input type="text" name="greeting" id="greeting" placeholder="e.g. Hello {{$data->name}}," 
                           class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700">
                </div>

                <!-- Action Text -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Action Button Text</label>
                    <input type="text" name="action_text" id="action_text" placeholder="e.g. View Booking details" 
                           class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700">
                </div>
            </div>

            <!-- Mail Body -->
            <div class="flex flex-col gap-2">
                <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Email Content</label>
                <textarea name="body" id="message" rows="8" placeholder="Type your message here..." 
                          class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700 resize-none"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Action URL -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Action URL (Link)</label>
                    <input type="text" name="action_url" id="action_url" placeholder="https://hotel.com/..." 
                           class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700">
                </div>

                <!-- End Line -->
                <div class="flex flex-col gap-2">
                    <label class="text-xs font-bold text-zinc-800 uppercase tracking-widest font-outfit">Signature / End Line</label>
                    <input type="text" name="endline" id="endline" placeholder="e.g. Regards, Hotel Management" 
                           class="w-full p-4 bg-white/10 border border-white/20 rounded-2xl focus:ring-2 focus:ring-admin-primary/20 focus:border-admin-primary outline-none transition-all text-zinc-700">
                </div>
            </div>

            <!-- Submit -->
            <div class="pt-4">
                <button type="submit" class="w-full py-5 bg-admin-primary text-white text-sm font-bold uppercase tracking-widest rounded-2xl hover:opacity-90 transition-all shadow-xl shadow-admin-primary/20 flex items-center justify-center gap-3">
                    <i class="fa fa-paper-plane"></i> Send Official Email
                </button>
            </div>
        </form>
    </div>
</div>
@endsection