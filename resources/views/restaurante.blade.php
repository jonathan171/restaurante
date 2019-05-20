@extends('layouts.app') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-14">
            <div class="col-md-14 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5882FA;color: white; ">
                        <h2>Resultados de la busqueda: {{$id}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              
                  @if (count($Restaurant)>0) 
                    @foreach ($Restaurant as $restaurante)
                   <div class="fondo">
                   <div class="encabezado">
                    <h2 style="margin-left: 30%;">{{$restaurante->nombre}}</h2> 
                      </div>
                       <div class="interno">
                              <div style="float: right; margin-right: : 10%; width: 85%; text-align: left;">
                   
                        
                       <table class="tableRestaurante">
                          <tr>
                              <td >  Direccion :  </td>   <td > {{$restaurante->direccion}}</td>
                          </tr>
                          <tr>
                              <td >  ponderacion :  </td>   <td ><div class="ec-stars-wrapper">
  <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
  <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
  <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
  <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
  <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
</div>
<noscript>Necesitas tener habilitado javascript para poder votar</noscript> </td>
                          </tr>
                           <tr>
                              <td >  Telefono:  </td>  <td >  {{$restaurante->Telefono}} </td>
                          </tr>
                          <tr>
                              <td > tipo de {{$restaurante->tipo}} : </td>  <td >  {{$restaurante->producto}}</td>
                          </tr>
                         <tr>
                              <td > Precio : </td>  <td > $ {{$restaurante->precio}}</td>
                          </tr>
                          <tr>
                              <td > Ingredientes : </td>  <td >  {{$restaurante->ingredientes}}</td>
                          </tr>
                       </table>
                     </div>
                        <div style="float: left; margin-left: 5%; width:10% ">
                              <div class="contenedor_imagen_texto2">
                            <div id="imagen2">
                            <img  class="img-rounded" src="{{asset("$restaurante->logo")}}" >
                             <button type="button" class="btn btn-success">pedir</button>
                                </div>

                            </div>
                            
                             </div>  
                           </div>

                        <br>
                   
             </div>
                    @endforeach  
                   
                    @else
                    <div class="border2">
                    <h3>No hay resultados para la búsqueda</h3>
                     <div class='starrr' id='star1'></div>
                    </div>
                    @endif
                    

                    
                </div>
            </div>
        </div>

    </div>


   
     @include('Content.footer')

@endsection