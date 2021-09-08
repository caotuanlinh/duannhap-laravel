@extends('admin.layouts.main')
@section('title','Trang sửa dịch vụ')
@section('content')
<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="">Tên dịch vụ</label>
                <input type="text" name="name" class="form-control" value="{{$servi->name}}">
                @error('name')
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