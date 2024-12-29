<?php

namespace App\Http\Controllers\Admin;

use App\Models\Requisitions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequisitionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.requisitions.home');
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
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|unique:requisitions',
            'designation'=>'required',
        ],[
            'name.required'=>'Please insert name',
            'phone.required'=>'Please insert phone',
            'email.required'=>'Please insert email',
            'email.unique'=>'This email is already taken',
            'designation.required'=>'Please insert designation',
        ]);

        Requisitions::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'designation'=>$request->designation,
        ]);

        if($request){
            return redirect('/dashboard');
        }
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
