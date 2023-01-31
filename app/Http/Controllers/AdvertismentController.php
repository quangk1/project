<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validations\Validator;
use App\Models\Advertisment as Advertisment;
use App\Http\Requests\StoreAdvertisment;

class AdvertismentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisments = Advertisment::all();
            return view('advertisment.index',['advertisments' => $advertisments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisment.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvertisment $request)
    {
        //
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
        $advertisments = Advertisment::findOrFail($id);
        return view('advertisment.edit', ["advertisment" => $advertisment]);
        return $this-> index();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdvertisment $request, $id)
    {
        $advertisments = Advertisment::findOrFail($id);

        $advertisment->quantity = $request->quantity;
        $advertisment->datesetup = $request->datesetup;
        $advertisment->fullname = $request->fullname;
        $advertisment->phone = $request->phone;
        $advertisment->address = $request->address;
        $advertisment->description = $request->description;

        $advertisments->save(); 

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
        $advertisments = Advertisment::findOrFail($id);
        $advertisments->delete();

        return $this->index();

    }
}
