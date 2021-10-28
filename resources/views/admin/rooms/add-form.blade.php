@extends('admin.layouts.main')
@section('title','Thêm phòng mới')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Số phòng</label>
                <input type="text" name="room_no" class="form-control" value="{{old('room_no')}}">
                @error('room_no')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Dịch vụ phòng</label> <br>
                @foreach($service as $c)
                <input type="checkbox" name="servi_id[]" value="{{$c->id}}"  > {{$c->name}}<br>
                @endforeach
            </div>
            <div class="form-group">
                <label for="">topping</label> <br>
                @foreach($topping as $c)
                <input type="checkbox" name="topping_id[]" value="{{$c->id}}"  > {{$c->name}}<br>
                @endforeach
            </div>
            <div class="form-group">
                <label for="">Tầng</label>
                <input type="text" name="floor" class="form-control" value="{{old('floor')}}">
                @error('floor')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}">
                @error('price')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Giá thêm</label>
                <input type="text" name="additional_price" class="form-control" value="{{old('additional_price')}}">
            </div>

        </div>
        <div class="col-6">
            <div class="add-product-preview-img">

            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" name="uploadfile" class="form-control">
                @error('uploadfile')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Chi tiết sản phẩm:</label>
                <textarea name="detail" class=form-control rows="10"></textarea>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{route('room.index')}}" class="btn btn-danger">Hủy</a>
        </div>
    </div>

</form>
<br>
@endsection