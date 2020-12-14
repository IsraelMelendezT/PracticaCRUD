<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{

    public function index()
    {
        $poeta =DB::table('poetas')
        ->orderBy('poetcode', 'desc')
        ->get();
        return view ('crud.showPoetas', ['poetas' => $poeta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.altaUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poeta = DB::table('poetas')->insert([
            'firstName' => $request->input('firstName'),
            'surName' => $request->input('surName'),
            'address' => $request->input('address'),
            'postCode' => $request->input('postCode'),
            'telephoneNumber' => $request->input('telephoneNumber')
        ]);
        return redirect()->action('crud@index')
        ->with('status', 'Usuario creado');   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poeta = DB::table('poetas')
            ->where('poetCode', '=', $id)
            ->first();
        return view('crud.altaUsuario',['poeta' => $poeta]);
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
    public function update(Request $request)
    {
        $poeta = DB::table('poetas')
            ->where('poetCode', '=', $request->input('id')) 
            ->update([
                'firstName' => $request->input('firstName'),
                'surName' => $request->input('surName'),
                'address' => $request->input('address'),
                'postCode' => $request->input('postCode'),
                'telephoneNumber' => $request->input('telephoneNumber')
            ]);  
            return redirect()->action('crud@index')
                ->with('status', 'Se ha modificado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poeta = DB::table('poetas')
            ->where('poetcode','=',$id)
            ->delete();
            return redirect()->action('crud@index')
                ->with('status', 'Se ha eliminado Exitosamente');
    }
}
