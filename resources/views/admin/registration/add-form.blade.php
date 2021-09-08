@extends('admin.layouts.main')
@section('title','Đổi mật khẩu')
@section('content')
@if(session('msg')!= null)
<p style="color: red;"> {{session('msg')}} </p>
@endif
<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="">Email </label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}">
                <!-- @error('password_old')
                <div style="color: red;">{{ $message }}</div>
                @enderror -->
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Password </label>
                <input type="password" name="password" class="form-control">
                <!-- @error('password_old')
                <div style="color: red;">{{ $message }}</div>
                @enderror -->
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Mật khẩu mới</label>
                <input type="password" name="password2" class="form-control">
                <!-- @error('password2')
                <div style="color: red;">{{ $message }}</div>
                @enderror -->
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </div>

</form>
<br>
@endsection