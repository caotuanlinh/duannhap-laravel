<form action="" method="post" >
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" value="{{old('password')}}">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone_number" class="form-control" value="{{old('phone')}}">
            </div>
            <button type="submit">Đăng ký</button>
        </div>
    </div>

</form>
<br>