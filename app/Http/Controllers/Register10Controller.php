<?php

namespace App\Http\Controllers;

use App\Models\Register10;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class Register10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Register10::all();
        return view('register10.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register10.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = Register10::create($request->all());
        return redirect()->route('register10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register10  $register10
     * @return \Illuminate\Http\Response
     */
    public function show(Register10 $register10)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register10  $register10
     * @return \Illuminate\Http\Response
     */
    public function edit(Register10 $register10)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register10  $register10
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register10 $register10)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register10  $register10
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register10 $register10)
    {
        //
    }
}
