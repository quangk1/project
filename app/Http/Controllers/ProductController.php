<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\View;
use App\Models\Product as Product;
use App\Models\Category as Category;
use App\Models\Style as Style;
use App\Models\Partner as Partner;

use Illuminate\Contracts\Validations\Validator;
use App\Http\Requests\StoreProduct;


use File;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productModel = new \App\Models\Product;
        //$products = Product::all();
        $products = Product::paginate(10);
            return view('product.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $styles = Style::all();
        $partners = Partner::all();
        return view('product.new',[
            "categories" => $categories,
            "styles" => $styles,
            "partners" => $partners
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request) 
    // đổi requrest thành StoreProduct
    // store là xử lý tác vụ : thêm sản phẩm
    {
        $product = new Product();
        
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->style_id = $request->style_id;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->partner_id = $request->partner_id;
        $product->description = $request->description;

        $product->save();//Phải save thì mới tạo được

        if($request->hasfile('photos')){
            $dir = public_path('uploads')."/products/". $product->id;
            File::makeDirectory($dir);

            foreach ($request -> file('photos') as $file) {
                $file->move($dir,$file->getClientOriginalName());
            }

        }



        return $this-> index();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $lang = $request->session()->get('language');
        
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();
        $styles = Style::all();
        $partners = Partner::all();
        return view('product.edit',[
            "categories" => $categories,
            "styles" => $styles,
            "partners" => $partners,
            "product" => $product
        ]);

        return $this-> index();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->style_id = $request->style_id;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->partner_id = $request->partner_id;
        $product->description = $request->description;

        $product->save(); 


      

        if($request->hasfile('photos')){
            $dir = public_path('uploads')."/products/". $product->id;
        
            //Xóa thư mục ảnh cũ
            if(File::exists($dir))
                File::deleteDirectory($dir);
            //Tạo thư mục ảnh mới và thêm các ảnh được upload
            File::makeDirectory($dir);

            foreach ($request -> file('photos') as $file) {
                $file->move($dir,$file->getClientOriginalName());
            }

        }
        return $this-> index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        $dir = public_path('uploads')."/products/". $product->id;
        
            //Xóa thư mục ảnh
            if(File::exists($dir))
                File::deleteDirectory($dir);

        return $this->index();
    }
}
