<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ServicesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.blog-single-sidebar-right');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'subject' => 'required',
                'phone' => 'required',
                'message' => 'required'
            ]
        );

        $ServicesModel = new ServicesModel();
        $ServicesModel->name = $request->name;
        $ServicesModel->email = $request->email;
        $ServicesModel->subject = $request->subject;
        $ServicesModel->phone = $request->phone;
        $ServicesModel->message = $request->message;
        $ServicesModel->save();
        return back()->withSuccess('Thanks for Contacting Us. We\'ll Contact You ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
