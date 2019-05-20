<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\TipoComida;
use App\Http\Requests;
use  App\DescripciionComida;
class ControllerTipoComida extends Controller
{



     private $comida= null;

     public function _CONSTRUCT(){

           $this->$comida= new TipoComida();
         
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
    public function find_public_by_search( Request $request)
    {
        $query=$request->dato;
        $comidas=array();
        $decripcion=array();

        if ($query!="") {
          $comidas=TipoComida::where("name","LIKE","%$query%")->paginate(10);
          $c=$comidas;
         $descripcion=DescripciionComida::all();

        }
        
        return view('comidas_busqueda', compact('query','comidas','descripcion'));

        //return $publicaciones;
    }
}
