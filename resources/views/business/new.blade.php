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
<form action="{{route('business.store')}}" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
<label for="name">name</label>
<input name="name" type="text" value="{{old('name')}}" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
</div>
<div class="form-group">
<label for="bank_information">bank_information</label>
<input name="bank_information" type="text" value="{{old('bank_information')}}" class="form-control" id="bank_information" aria-describedby="bank_informationHelp" placeholder="Enter bank_information">
</div>
<div class="form-group">
<label for="phone">phone</label>
<input name="phone" type="text" value="{{old('phone')}}" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
</div>
<div class="form-group">
<label for="email">email</label>
<input name="email" type="text" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<label for="description">description</label>
<input name="description" type="text" value="{{old('description')}}" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">
</div>
<button type="submit" class="btn btn-primary">Thêm </button>
</form>
@endsection