@extends('layouts.app')


@section("content")
<div class="container">
<h3>Đặt món</h3>

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
<form action="{{route('advertisment.store')}}" method = "POST" enctype="multipart/form-data">
    @csrf				
<div class="form-group">
<label for="quantity">Số lượng</label>
<input name="quantity" type="text" value="{{old('quantity')}}" class="form-control" id="quantity" aria-describedby="quantityHelp" placeholder="Enter quantity">
</div>
<div class="form-group">
<label for="datesetup">Ngày đặt</label>
<input name="datesetup" type="date" value="{{old('datesetup')}}" class="form-control" id="datesetup" aria-describedby="datesetupHelp" placeholder="Enter datesetup">
</div>
<div class="form-group">
<label for="fullname">Họ và tên</label>
<input name="fullname" type="text" value="{{old('fullname')}}" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Enter fullname">
</div>
<div class="form-group">
<label for="phone">SĐT</label>
<input name="phone" type="text" value="{{old('phone')}}" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
</div>
<div class="form-group">
<label for="address">Địa chỉ</label>
<input name="address" type="text" value="{{old('address')}}" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter address">
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<input name="description" type="text" value="{{old('description')}}" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">
</div>
<button type="submit" class="btn btn-primary">Thêm </button>

</form>
@endsection