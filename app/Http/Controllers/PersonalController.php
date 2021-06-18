<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal_infos = Personal::get();

        return view('personal.index', compact('personal_infos'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal = new Personal;
        $personal->name = $request->name;
        $personal->email = $request->email;
        $personal->phone_no = $request->phone_no;
        $personal->address = $request->address;
        $personal->save();

        return redirect()->route('personal')->with('success', 'Success!');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::where('id', $id)->first();

        return view('personal.edit', compact('personal'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personal = Personal::where('id', $id)->first();

        $personal->name = $request->name;
        $personal->email = $request->email;
        $personal->phone_no = $request->phone_no;
        $personal->address = $request->address;
        $personal->save();

        return redirect()->route('personal')->with('success', 'Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::where('id', $id)->first();
        $personal->delete();

        return redirect()->route('personal')->with('success', 'Success!');    }
}
