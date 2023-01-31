@extends('layouts.app')


@section("content")

<div class="container">
<h3>{{__('business.index.title')}}</h3>
<a href="{{route('business.create')}}">
    <button class="button">{{__('business.index.button.add')}}</button>
    <table class = "table table-bordered">
        <tr class= "thcon">
        <th>{{__('business.index.id')}}</th>
        <th>{{__('business.index.name')}}</th>
        <th>{{__('business.index.bank_information')}}</th>
        <th>{{__('business.index.phone')}}</th>
        <th>{{__('business.index.email')}}</th>
        <th>{{__('business.index.description')}}</th>
        <th>{{__('business.index.action')}}</th>
            
        </tr>
        
@foreach($businesss as $business)

<tr>
<td>{{$business->id}}</td>
<td>{{$business->name}}</td>
<td>{{$business->bank_information}}</td>
<td>{{$business->phone}}</td>
<td>{{$business->email}}</td>
<td>{{$business->description}}</td>
    <td>
    <a href="{{route('business.edit',['business'=>$business->id])}}">
        <button>Sửa</button>
        
    </a>
    <form action="{{route('business.destroy',['business'=>$business->id])}}" method="POST" onsubmit="return confirm('Bạn thực sự muốn xóa')">
        @method('delete')
        @csrf
        <input type="submit" value="xóa">
    </form>
    </td>
</tr>

@endforeach

    </table>       
    {{$businesss->links()}}             
</a>
<link href= "/css/business.css" rel="stylesheet">
@endsection