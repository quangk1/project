<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\View;
use App\Models\Business as Business;

use Illuminate\Contracts\Validations\Validator;
use App\Http\Requests\StoreBusiness;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesss = Business::paginate(5);
            return view('business.index',['businesss' => $businesss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusiness $request)
    {
        $business = new Business();
        
        $business->name = $request->name;
        $business->bank_information = $request->bank_information;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->description = $request->description;

        $business->save();


        return $this-> index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
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
        $business = Business::findOrFail($id);
        return view('business.edit', ["business" => $business]);
        return $this-> index();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBusiness $request, $id)
    {
        $business = Business::findOrFail($id);
        
        $business->name = $request->name;
        $business->bank_information = $request->bank_information;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->description = $request->description;
        
        $business->save(); 

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
        $business = Business::FindOrFail($id);
        $business->delete();
        
        // $dir = public_path("uploads").'/businesss/'.$business->id;
        // if(File::exists($dir))
        //     File::deleteDirectory($dir);

        return $this->index();
    }
}
