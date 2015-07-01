<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CONTROL ESCOLAR')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
    <div class="container-fluid">
        <div class="row"></div>
            <div class="col-xs-12">
                <center>
                <img src="img1.jpg"width='87%'>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <nav class="col-xs-4 color2">
            <br>
            <br>
        @section('materias')
                     <div class="list-group">

            @foreach ($materias as $materia)
         <a align="center" href="grupos/{{ $materia->id }}" class="list-group-item"><b>{{ $materia->nombre }}</b></a>
            @endforeach
            </div>
        @show
         

        </nav>


        <div class="container">
    <div class="row">
        <nav class="col-xs-8">
            <h1 align="center"><b style="text-decoration: underline">GRUPOS DISPONIBLES</b></h1>
       
           @yield('content') 
        </nav>   
        </div> 
    </div>
    <footer>
        <div class="container-fluid color4">
        <div class="row"></div>
            <div class="col-xs-14"style="background: rgba(0,0,1,0.5);"  >
        <hr>
        <center><h4><font color="white">COPY&RIGTH &COPY;</font></h4>
    </div>  
</footer class="container">
</body>
</html>
