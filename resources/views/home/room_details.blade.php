<!DOCTYPE html>
<html lang="en">
   <!-- head -->
   <head>
    <base href="/public">
      @include('home.css')
      <style>
        label{
            display: inline-block;
            width: 200px;
        }
        input{
            width: 100%;
        }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header')
      </header>
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <div id="serv_hover"  class="room">
                     <div style="padding: 20px;" class="room_img">
                       <img style="hight:auto; width:500px" src="/room/{{$room->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h2>{{$room->room_title}}</h2>
                        <p style="padding:12px">{{$room->description}}</p>
                        <h4 style="padding:12px">Free wifi : {{$room->wifi}}</h4>
                        <h4 style="padding:12px">Room type : {{$room->room_type}}</h4>
                        <h4 style="padding:12px">Price : {{$room->price}}</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                    <h1 style="font-size: 25px!important; padding: 10px; text-align: center;">
                        Book Room
                    </h1>
                    @if(session()->has('message'))
                        <div class="alert alert-success" style="text-align: center;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger" style="text-align: center;">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('add_booking',$room->id)}}" method="post">
                        @csrf
                        <div>
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter your name" name="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" placeholder="Enter your email" name="email" @if(Auth::id()) value="{{Auth::user()->email}}" @endif>
                        </div>
                        <div>
                            <label for="">Phone</label> 
                            <input type="number" placeholder="Enter your phone" name="phone" @if(Auth::id()) value="{{Auth::user()->phone}}" @endif>
                        </div>
                        <div>
                            <label for="">Start Date</label>
                            <input type="date" name="start_date" id="start_date">
                        </div>
                        <div>
                            <label for="">End Date</label>
                            <input type="date" name="end_date" id="end_date">
                        </div>
                        <div>
                            <input style="margin-top: 20px;" type="submit" style="background-color: skyblue;" value="Book Room" class="btn btn-primary">
                        </div>
                    </form>
               </div>
            </div>
         </div>
      </div>
      @include('home.footer')
      <!-- end footer -->
      <!-- Javascript files-->
       <script type="text/javascript">
        $(function(){
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10) month = '0' + month.toString();
            if(day < 10) day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            $('#start_date').attr('min', maxDate);
            $('#end_date').attr('min', maxDate);
        });
       </script>
   </body>
</html>