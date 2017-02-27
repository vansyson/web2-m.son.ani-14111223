<?php

namespace App\Http\Controllers;
use App\mhsw;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = mhsw::all();
       return view('index')->with('mhsw',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new mhsw;
        $data->nama     =$request->nama;
        $data->nim      =$request->nim;
        $data->alamat   =$request->alamat;
        $data->save();
        
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampil_id=mhsw::Find($id);
        return view('edit', compact('tampil_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data= mhsw::Find($id);
        $data->nama     =$request->nama;
        $data->nim      =$request->nim;
        $data->alamat   =$request->alamat;
        $data->save();
        
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =mhsw::FindOrFail($id);
        $data->delete();
        return redirect('/index')->with('message', 'Data Berhasil Dihapus');
    }
}
