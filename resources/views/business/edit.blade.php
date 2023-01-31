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


<form action="{{route('business.update',['business'=>$business->id])}}" method = "POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="form-group">
<label for="name">Name</label>
<input name="name" type="text" value="{{old('name')?old('name'):$business->name}}" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
</div>
<div class="form-group">
<label for="bank_information">Bank_information</label>
<input name="bank_information" type="text" value="{{old('bank_information')?old('bank_information'):$business->bank_information}}" class="form-control" id="bank_information" aria-describedby="bank_informationHelp" placeholder="Enter bank_information">
</div>
<div class="form-group">
<label for="email">Email</label>
<input name="email" type="text" value="{{old('email')?old('email'):$business->email}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">{{old('description')?old('description'):$business->description}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Sua </button>
</form>
@endsection