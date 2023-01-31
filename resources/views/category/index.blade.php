@extends('layouts.app')


@section("content")
<div class="container">
<h3>{{__('category.index.title')}}</h3>
<a href="{{route('category.create')}}">
    <button>{{__('category.index.button.add')}}</button>
    <table class = "table table-bordered">
        <tr>
        <th>{{__('category.index.id')}}</th>
        <th>{{__('category.index.name')}}</th>
        <th>{{__('category.index.photo')}}</th>
        <th>{{__('category.index.category')}}</th>
        <th>{{__('category.index.style')}}</th>
        <th>{{__('category.index.size')}}</th>
        <th>{{__('category.index.weight')}}</th>
        <th>{{__('category.index.price')}}</th>
        <th>{{__('category.index.old_price')}}</th>
        <th>{{__('category.index.partner')}}</th>
        <th>{{__('category.index.description')}}</th>
        <th>{{__('category.index.action')}}</th>
            
        </tr>
        
@foreach($categorys as $category)

<tr>
<td>{{$category->id}}<td>
<td>{{$category->name}}<td>
<td><div style="height:50px; overflow-y:scroll;">
    <?php
    // use File
    $dir = public_path('uploads')."/categorys/". $category->id;
        
    //Xóa thư mục ảnh cũ
    if(File::exists($dir)){
        $files = File::files($dir);
        foreach($files as $file)
        {
        ?>
            <img src="/uploads/categorys/{{$category->id}}/{{basename($file->getPathname())}}" width="50">
        <?php
        }
    }

    ?>
</div><td>
<td>{{$category->category_id}}<td>
<td>{{$category->style_id}}<td>
<td>{{$category->size}}<td>
<td>{{$category->weight}}<td>
<td>{{$category->price}}<td>
<td>{{$category->old_price}}<td>
<td>{{$category->partner_id }}<td>
<td>{{$category->description}}<td>
    <td>
    <a href="{{route('category.edit',['category'=>$category->id])}}">
        <button>Sửa</button>
        
    </a>
    <form action="{{route('category.destroy',['category'=>$category->id])}}" method="POST" onsubmit="return confirm('Bạn thực sự muốn xóa')">
        @method('delete')
        @csrf
        <input type="submit" value="xóa">
    </form>
    </td>
</tr>

@endforeach

    </table>   
    {{$categorys->links()}}            








</a>
@endsection