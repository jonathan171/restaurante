<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class descripcionComida extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function find_public_by_restaurant( Request $request ,$id)
    {   $Restaurant= array();

        if ($id!="") {
       $Restaurant = DB::table('descripcion_comida as d')
    ->join('table_restaurant as t', 'd.restaurant_id', '=', 't.id')
    ->join('tipo_comidas as tc', 'd.tipo_id', '=', 'tc.id')->where("tc.name","LIKE","%$id%")
    ->select('t.*', 'd.nombre as producto','d.precio', 'd.ingredientes','d.imagen','tc.name as tipo')
    ->get();
}
      return view('restaurante', compact('Restaurant','id'));

    }
}
