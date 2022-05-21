<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class ViewStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Students::all();
        return view('biodata', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Students::create($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'New Data Created Successfully !');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Students::find($id);
        // dd($data);
        return view('ubahdata', compact('data'));
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
        $data = Students::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('berhasil', 'Updated Data Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Students::find($id);
        // dd($data);
        $data->delete($id);
        return redirect()->route('mahasiswa')->with('berhasil', 'Deleted Data Successfully !');
        
    }
}