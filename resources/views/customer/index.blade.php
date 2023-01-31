@extends('layouts.app')


@section("content")
<div class="container">
<h3>{{__('customer.index.title')}}</h3>
<a href="{{route('customer.create')}}">
    <button>{{__('customer.index.button.add')}}</button>
    <table class = "table table-bordered">
        <tr>
        <th>{{__('customer.index.id')}}</th>
        <th>{{__('customer.index.fullname')}}</th>
        <th>{{__('customer.index.gender')}}</th>
        <th>{{__('customer.index.DOB')}}</th>
        <th>{{__('customer.index.address')}}</th>
        <th>{{__('customer.index.phone')}}</th>
        <th>{{__('customer.index.email')}}</th>
        <th>{{__('customer.index.description')}}</th>
        <th>{{__('customer.index.action')}}</th>
            
        </tr>
        
@foreach($customers as $customer)

<tr>
<td>{{$customer->id}}</td>
<td>{{$customer->fullname}}</td>
<td>{{$customer->gender}}</td>
<td>{{$customer->DOB}}</td>
<td>{{$customer->address}}</td>
<td>{{$customer->phone}}</td>
<td>{{$customer->email}}</td>
<td>{{$customer->description}}</td>
    <td>
    <a href="{{route('customer.edit',['customer'=>$customer->id])}}">
        <button>{{__('customer.index.fix')}}</button>
        
    </a>
    <form action="{{route('customer.destroy',['customer'=>$customer->id])}}" method="POST" onsubmit="return confirm('Bạn thực sự muốn xóa')">
        @method('delete')
        @csrf
        <input type="submit" value="{{__('customer.index.remove')}}">
    </form>
    </td>
</tr>

@endforeach

    </table>   
    {{$customers->links()}}            

</a>
@endsection