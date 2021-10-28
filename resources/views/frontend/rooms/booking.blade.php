@include('frontend.layouts.header')
<form action="" method="post">
<label for="">Họ tên đầy đủ</label>
<input type="text" name="name" > <br>
<label for="">SDT</label>
<input type="text" name="phone" > <br>
<label for="">Email</label>
<input type="text" name="email" > <br>
<label for="">Tên phòng</label>
<input type="text" name="room_no" value="{{$room->room_no}}" > <br>
<label for="">Dịch vụ</label> <br> 
<table class="table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên dịch vụ</th>
      <th scope="col">Giá dịch vụ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($service as $c)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><input type="checkbox" value="{{$c->id}}" name="servi_id[]">{{$c->name}}</td>
      <td>{{$c->price}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
<label for="">Thời gian </label> <br>
<input type="date"> đến <input type="date"> <br>
<button type="submit">Đăng ký</button>
</form>