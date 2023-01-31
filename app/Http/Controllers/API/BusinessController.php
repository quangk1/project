<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business as Business;
class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesss = Business::all();
        return response()->json($businesss,201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business();

        $business->name = $request->name;
        $business->bank_information = $request->bank_information;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->description = $request->description;

        $business->save();
        return response()->json($business->id,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business = Business::findOrFail($id);
        return response()->json($business,201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business = Business::findOrFail($id);

        $business->name = $request->name;
        $business->bank_information = $request->bank_information;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->description = $request->description;

        $business->save();
        return response()->json($id,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = Business::findOrFail($id);
        $business->delete();
        return response()->json($id,200);
    }
}
