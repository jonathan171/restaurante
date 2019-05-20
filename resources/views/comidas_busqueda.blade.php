@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-14">
            <div class="col-md-14 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5882FA;color: white; ">
                        <h2>Resultados de la busqueda: {{$query}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                 <div class="fondo">
                  @if (count($comidas)>0) 
                    @foreach ($comidas as $comida)
               
                  
                    <h2 style="    text-align: center; color: white">{{$comida->name}}s</h2> 
                      
                      
                      @foreach($descripcion as $des)
                          @if($des->tipo_id==$comida->id) 
                          <div class="interno">
                              <div style="float: left; margin-left: 10%;">
                       <table >
                        
                          <tr>
                              <td >  Nombre:  </td>   <td > {{$des->nombre}}</td>
                          </tr>
                           <tr>
                              <td >  Precio:  </td>  <td >  {{$des->precio}} </td>
                          </tr>
                          <tr>
                              <td >  Ingredientes: </td>  <td >  {{$des->ingredientes}}</td>
                          </tr>
                         
                       </table>
                     </div>
                        <div style="float: right; margin-right: 20%;">
                              <div class="contenedor_imagen_texto2">
                            <div id="imagen2">
                            <img  class="img-rounded" src='{{$des->imagen}}' >
                                </div>
                            </div>
                        </div>
                             </div>

                        <br>
                       @endif
              
                  @endforeach
             
                    @endforeach  
                   
                    @else
                    <div class="border2">
                    <h3>No hay resultados para la búsqueda</h3>
                    </div>
                    @endif
  </div>


                </div>
            </div>
        </div>
    </div>
   @include('Content.footer')

@endsection