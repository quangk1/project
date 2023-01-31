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


<form action="{{route('feedback.update',['feedback'=>$feedback->id])}}" method = "POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="form-group">
<label for="fullname">Họ và tên</label>
<input value="{{old('fullname')?old('fullname'):$feedback->fullname}}" name="fullname" type="text" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Enter fullname">
</div>


<div class="form-group">
<label for="phone">SĐT</label>
<input name="phone" type="text" value="{{old('phone')?old('phone'):$feedback->phone}}" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
</div>

<div class="form-group">
<label for="email">Email</label>
<input name="email" type="text" value="{{old('email')?old('email'):$feedback->email}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>

<div class="form-group">
<label for="title">tiêu đề</label>
<input name="title" type="text"  value="{{old('title')?old('title'):$feedback->title}}" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
</div>

<div class="form-group">
<label for="status">(số)</label>
<input name="status" type="text"  value="{{old('status')?old('status'):$feedback->status}}" class="form-control" id="status" aria-describedby="statusHelp" placeholder="Enter status">
</div>

<button type="submit" class="btn btn-primary">Sửa</button>
</form>
@endsection