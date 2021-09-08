@extends('admin.layouts.main')
@section('title','Sửa phòng')
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Số phòng</label>
                <input type="text" name="room_no" class="form-control" value="{{$room->room_no}}">
            </div>
            <div class="form-group">
                <label for="">Dịch vụ</label> <br>
                @foreach($service as $c)

                <input type="checkbox" value="{{$c->id}}" name="servi_id[]" 
                {{
                   (in_array($c->id,$room_servi)? 'checked':'')
                }}> {{$c->name}} <br>
                @endforeach
            </div>
            <div class="form-group">
                <label for="">Tầng</label>
                <input type="text" name="floor" class="form-control" value="{{$room->floor}}">
                @error('floor')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Giá phòng</label>
                <input type="text" name="price" class="form-control" value="{{$room->price}}">
                @error('price')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="add-product-preview-img">
                <img src="{{asset('storage/' . $room->image)}}" class="img-thumbnail">
            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file"  name="uploadfile" class="form-control">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Chi tiết phòng:</label>
                <textarea name="detail" class=form-control  rows="10">{{$room->detail}}</textarea>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Lưu</button>
            
        </div>
    </div>
    
</form>
<br>
@endsection