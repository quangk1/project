@extends('layouts.app')


@section("content")
<div class="container">
<h3>Thêm sản phẩm</h3>

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error_message)
                <li>{{$error_message}}</li>
            @endforeach
        </ul>
    </div>
@endif
<!--enctype="multipart/form-data" dùng để uploads ảnh, multiple:up nhiều ảnh-->
<form action="{{route('customer.store')}}" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
<label for="fullname">Họ và Tên</label>
<input name="fullname" type="text" value="{{old('fullname')}}" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Enter fullname">
</div>
<div class="form-group">
<label for="gender">Giới tính</label>
<input name="gender" type="text" value="{{old('gender')}}" class="form-control" id="gender" aria-describedby="genderHelp" placeholder="Enter gender">
</div>
<div class="form-group">
<label for="DOB">DOB</label>
<input name="DOB" type="date" value="{{old('DOB')}}" class="form-control" id="DOB" aria-describedby="DOBHelp" placeholder="Enter DOB">
</div>
<div class="form-group">
<label for="address">Địa chỉ</label>
<input name="address" type="text" value="{{old('address')}}" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter address">
</div>
<div class="form-group">
<label for="phone">SĐT</label>
<input name="phone" type="text" value="{{old('phone')}}" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
</div>
<div class="form-group">
<label for="email">email</label>
<input name="email" type="text" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">{{old('description')}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Thêm </button>
</form>
@endsection