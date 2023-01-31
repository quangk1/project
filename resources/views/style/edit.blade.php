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


<form action="{{route('product.update',['product'=>$product->id])}}" method = "POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
<div class="form-group">
<label for="name">Tên sản phẩm</label>
<!--nếu có old('name')? thì dùng old('name') nếu không có thì trả về theo CSDL-->
<input value="{{old('name')?old('name'):$product->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
</div>

<div class="form-group">
<label for="photos">Ảnh sản phẩm</label>

<input name="photos[]" type="file" class="form-control" id="photos" aria-describedby="nameHelp" multiple>
</div>



<div class="form-group">
<label for="category_id">Danh mục</label>
<select name="category_id" type="text" class="form-control" id="category_id" aria-describedby="category_idHelp" placeholder="Enter category_id">
    @foreach ($categories as $category)

    <option value="{{$category->id}}" {{$category->id == (old('category_id')?old('category_id'):$product->category_id)?"selected":""}}>{{$category->name}}</option>


    @endforeach
</select>
</div>

<div class="form-group">
<label for="style_id">kiểu</label>
<select name="style_id" type="text" class="form-control" id="style_id" aria-describedby="style_idHelp" placeholder="Enter style_id">
    @foreach ($styles as $style)

    <option value="{{$style->id}}" {{$style->id == (old('style_id')?old('style_id'):$product->style_id)?"selected":""}}>{{$style->name}}</option>

    @endforeach
</select>
</div>

<div class="form-group">
<label for="size">cỡ</label>
<input name="size" type="text" value="{{old('size')?old('size'):$product->size}}" class="form-control" id="size" aria-describedby="sizeHelp" placeholder="Enter size">
</div>

<div class="form-group">
<label for="weight">cân nặng</label>
<input name="weight" type="text" value="{{old('weight')?old('weight'):$product->weight}}" class="form-control" id="weight" aria-describedby="weightHelp" placeholder="Enter weight">
</div>

<div class="form-group">
<label for="price">giá</label>
<input name="price" type="text"  value="{{old('price')?old('price'):$product->price}}" class="form-control" id="price" aria-describedby="priceHelp" placeholder="Enter price">
</div>

<div class="form-group">
<label for="old_price">giá cũ</label>
<input name="old_price" type="text"  value="{{old('old_price')?old('old_price'):$product->old_price}}" class="form-control" id="old_price" aria-describedby="old_priceHelp" placeholder="Enter old_price">
</div>

<div class="form-group">
<label for="partner_id">Đối tác</label>
<select name="partner_id" type="text" class="form-control" id="partner_id" aria-describedby="partner_idHelp" placeholder="Enter partner_id">
    @foreach ($partners as $partner)

    <option value="{{$partner->id}}" {{$partner->id == (old('partner_id')?old('partner_id'):$product->partner_id)?"selected":""}} >{{$partner->name}}</option>

    @endforeach
</select>
</div>

<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description">{{old('description')?old('description'):$product->description}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Sua </button>
</form>
@endsection