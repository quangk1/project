@extends('layouts.app')


@section("content")


<div class="container">
<h3>Sửa sản phẩm</h3>

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error_message)
                <li>{{$error_message}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('customer.update',['customer'=>$customer->id])}}" method = "POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
<label for="fullname">Họ và tên</label>
<input value="{{old('fullname')?old('fullname'):$customer->fullname}}" name="fullname" type="text" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Enter fullname">
</div>
<div class="form-group">
<label for="gender">Giới tính</label>
<input value="{{old('gender')?old('gender'):$customer->gender}}" name="gender" type="text" class="form-control" id="gender" aria-describedby="genderHelp" placeholder="Enter gender">
</div>
<div class="form-group">
<label for="DOB">Sinh</label>
<input value="{{old('DOB')?old('DOB'):$customer->DOB}}" name="DOB" type="date" class="form-control" id="DOB" aria-describedby="DOBHelp" placeholder="Enter DOB">
</div>
<div class="form-group">
<label for="address">Địa chỉ</label>
<input value="{{old('address')?old('address'):$customer->address}}" name="address" type="text" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter address">
</div>
<div class="form-group">
<label for="phone">SĐT</label>
<input value="{{old('phone')?old('phone'):$customer->phone}}" name="phone" type="text" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
</div>
<div class="form-group">
<label for="email">Email</label>
<input value="{{old('email')?old('email'):$customer->email}}" name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<input value="{{old('description')?old('description'):$customer->description}}" name="description" type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">
</div>



<button type="submit" class="btn btn-primary">Sua </button>
</form>
@endsection