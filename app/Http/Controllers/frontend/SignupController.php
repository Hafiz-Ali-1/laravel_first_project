<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\SignupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("frontend.signup");
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
                'email' => 'required|email',
            'password' => 'required',
            ]
        );
        $SignupModel = new SignupModel();
        $SignupModel->name = $request->name;
        $SignupModel->email = $request->email;
        $SignupModel->password = $request->password;
        $SignupModel->save();
        return back()->withSuccess('Thanks for Contacting Us. We\'ll Contact You ASAP!');
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
