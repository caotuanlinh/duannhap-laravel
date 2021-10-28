@include('frontend.layouts.header')

<div class="container">

    <h2>Rooms & Tariff</h2>


    <!-- form -->

    <div class="row">
        @foreach($room as $c)
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="{{asset( 'storage/' . $c->image)}}" width="550" height="350">
                <div>
                    <h3 style="margin-top: 10px;">{{$c->room_no}}</h3>
                    <p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
                    <a href="{{route('Detail_Room',['id' => $c->id])}}" >Check Details</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center">
        <ul class="pagination">
            <li class="disabled"><a href="#">«</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div>


</div>
@include('frontend.layouts.footer')