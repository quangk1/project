<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback as Feedback;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return response()->json($feedbacks,201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->fullname = $request->fullname;
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->title = $request->title;
        $feedback->status = $request->status;
        $feedback->save();
        
        return response()->json($feedback->id,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return response()->json($feedback,201);
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
        $feedback = Feedback::findOrFail($id);
        $feedback->fullname = $request->fullname;
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->title = $request->title;
        $feedback->status = $request->status;

        $feedback->save();
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
        $feedback = Feedback::FindOrFail($id);
        
        $feedback->delete();
        
        return response()->json($id,200);
    }
}
