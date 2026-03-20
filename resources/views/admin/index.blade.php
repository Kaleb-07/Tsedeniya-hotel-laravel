<!DOCTYPE html>
<html>
    <head>
        @include('admin.css')
    </head>
   <body class="bg-transparent font-sans">
    <div class="admin-gradient-bg"></div>
    <div class="min-h-screen flex flex-col relative z-0">
        @include('admin.header')
        <div class="flex flex-1 items-stretch overflow-hidden">
            @include('admin.sidebar')
            <div class="flex-1 overflow-y-auto overflow-x-hidden pt-24 lg:pt-28 lg:pl-[18rem]">
                <div class="px-6 py-6 lg:px-10 lg:py-8">
                    @yield('content')
                </div>
                @include('admin.footer')
            </div>
        </div>
    </div>
  </body>
</html>