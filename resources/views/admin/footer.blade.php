<footer class="mt-auto py-8">
    <div class="container-fluid">
        <div class="glass-card p-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-[10px] font-bold text-zinc-400 uppercase tracking-widest">
                &copy; {{ date('Y') }} <span class="text-admin-primary">Hotel Premium</span> Admin Dashboard.
            </p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-[10px] font-bold text-zinc-500 uppercase hover:text-admin-primary transition-colors">Documentation</a>
                <a href="#" class="text-[10px] font-bold text-zinc-500 uppercase hover:text-admin-primary transition-colors">Support</a>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript files-->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
{{-- <script src="{{ asset('js/charts-home.js') }}"></script> --}}
{{-- <script src="{{ asset('js/front.js') }}"></script> --}}