@extends('layouts.app')


@section("content")
<div class="container">
<h3>{{__('feedback.index.titles')}}</h3>
<a href="{{route('feedback.create')}}">
    <button>{{__('feedback.index.button.add')}}</button>
    <table class = "table table-bordered">
        <tr>
        <th>{{__('feedback.index.id')}}</th>
        <th>{{__('feedback.index.fullname')}}</th>
        <th>{{__('feedback.index.phone')}}</th>
        <th>{{__('feedback.index.email')}}</th>
        <th>{{__('feedback.index.title')}}</th>
        <th>{{__('feedback.index.status')}}</th>
        <th>{{__('feedback.index.action')}}</th>
            
        </tr>
        
@foreach($feedbacks as $feedback)

<tr>
<td>{{$feedback->id}}</td>
<td>{{$feedback->fullname}}</td>
<td>{{$feedback->phone}}</td>
<td>{{$feedback->email}}</td>
<td>{{$feedback->title }}</td>
<td>{{$feedback->status }}</td>
    <td>
    <a href="{{route('feedback.edit',['feedback'=>$feedback->id])}}">
        <button>Sửa</button>
        
    </a>
    <form action="{{route('feedback.destroy',['feedback'=>$feedback->id])}}" method="POST" onsubmit="return confirm('Bạn thực sự muốn xóa')">
        @method('delete')
        @csrf
        <input type="submit" value="xóa">
    </form>
    </td>
</tr>

@endforeach

    </table>   
    {{$feedbacks->links()}}            








</a>
@endsection