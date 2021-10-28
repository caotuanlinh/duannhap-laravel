@include('frontend.layouts.header')

<div class="container">
    <h1 class="title">{{$room->room_no}}</h1>



    <!-- RoomDetails -->
    <div id="RoomDetails" class="carousel " data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"><img src="{{asset('storage/'.$room->image)}}" class="img-responsive" alt="slide"></div>
        </div>
        <!-- Controls -->
        <!-- <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
    </div>
    <!-- RoomCarousel-->

    <div class="room-features spacer">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div style="color: blue ; font-size: 20px; margin-bottom: 20px;">Mô tả</div>
                <p>{{$room->detail}}</p>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="size-price" style="font-size: 20px;">Floor<span>{{$room->floor}}</span></div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="size-price" style="font-size: 20px;">Price<span>${{$room->price}}</span></div>
            </div>
            <div class="col-sm-3 col-md-2">
                <button><a href="{{Route('booking_room',['id'=>$room->id])}}">Đặt lịch</a></button>
            </div>
        </div>
    </div>




</div>
@include('frontend.layouts.footer')