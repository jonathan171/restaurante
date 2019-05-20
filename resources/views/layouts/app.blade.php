<!DOCTYPE html>
<html>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="XYZ123">
    <head>
        <meta charset="UTF-8">
        <title>Restaurant</title>
        
        <script src="{{asset('js/starrr.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"> </script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
        <script type="text/javascript" src="{{asset('js/jquery-1.10.2.js')}}"></script>     
        <script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}" ></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}" ></script>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="{{asset('js/jquery.easy-autocomplete.js')}}"></script> 
      
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<!-- CSS file -->
<link rel="stylesheet" href="css/easy-autocomplete.css"> 

<!-- Additional CSS Themes file - not required-->
        <link href="{{asset('css/starrr.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="css/easy-autocomplete.themes.css"> 
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style-portfolio.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/picto-foundry-food.css')}}" />
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>  

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}">Master</a>

                    </div> 

                 <div class="shearchDir">
                 </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <form class="form-inline navbar-form navbar-left" action="{{route('search_comida')}}">
          <div class="form-group">
            <label class="sr-only" for="search_box">Buscar</label>
            <input type="text" class="form-control" value="{{ old('search') }}" id="search_box" placeholder="¿Qué estás buscando?" name="dato">
          </div>
          <button type="submit" class="btn btn-primary">
                      <b>BUSCAR</b>
                    </button>

        </form>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
       Busca por dirección 
      <select class="form-control">
  <option>Calle</option>
  <option>Carrera</option>
</select>     
<input type="text" class="form-control" style="width: 100px " placeholder="">
#
<input type="text" class="form-control" style="width: 50px" placeholder="">
-
<input type="text" class="form-control" style="width: 50px" placeholder="">
   <button type="button" class="btn btn-info">Buscar</button>  
     
    </form>
                    </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
           




     

       <!-- ============ Pricing  ============= -->


        

        <!-- ============ Our Beer  ============= -->


      

       <!-- ============ Our Bread  ============= -->




        
        <!-- ============ Featured Dish  ============= -->

       

                            <!-- Wrapper for slides -->
            

        <!-- ============ Reservation  ============= -->

        
        <!-- ============ Social Section  ============= -->
      
        

        <!-- ============ Contact Section  ============= -->


        <!-- ============ Footer Section  ============= -->

 @yield('content')


    </body>
</html>