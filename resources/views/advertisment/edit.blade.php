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


<form action="{{route('advertisment.update',['advertisment'=>$advertisment->id])}}" method = "POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf


    
<button type="submit" class="btn btn-primary">Sua </button>
</form>
@endsection