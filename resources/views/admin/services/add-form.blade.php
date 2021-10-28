@extends('admin.layouts.main')
@section('title','Trang thêm dịch vụ')
@section('content')
<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="">Tên dịch vụ</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                @error('name')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Icon</label>
                <input type="text" name="icon" class="form-control" value="{{old('icon')}}">
                @error('icon')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}">
                @error('price')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Lưu</button>           
        </div>
    </div>
    
</form>
<br>
@endsection