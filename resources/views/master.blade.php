<!DOCTYPE html>
<html>
    <head >
    <meta charset="UTF-8">
    <title>@yield('title', 'CONTROL ESCOLAR')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body style="background: #65c3ba;">
    <header>
    <div class="container-fluid">
        <div class="row"></div>
            <div class="col-xs-12">
                <center>
                <img src="img1.jpg"width='550px'>
                <img src="img2.jpg"width='550px'>
               </center>
               <br>
               <br>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <nav class="col-xs-4 color2">
            <br>
            <br>
        
                     <div class="list-group sombra3">
            <a align="center" href="PROYECTOIW/EQUIPO3IW/public/" class="list-group-item active"><b>INICIO</b></a>
                @foreach ($materias as $materia)
             <a align="center" href="{{route('gruposs',[$materia->id])}}" class="list-group-item"><b>{{ $materia->nombre }}</b></a>
                @endforeach
            <a align="center" class="list-group-item active"><b>Instituto Tecnologico de Culiacan &COPY;</b></a>

                </div>

        </nav>


        <div class="container" >
    <div class="row">

        <nav class="col-xs-8">
            <h1 align="center" class="sombra1"><b style="text-decoration: underline">GRUPOS DISPONIBLES</b></h1>
            <br><h2 align="center" class="sombra2">@yield('welcome','Bienvenidos al Sistema Gestor de Grupos del ITC')</h2>
            @yield('img','<p align="center"><img  src="broncoss.png" width="30%" alt=""></p>')

           @yield('grupos') 
        </nav>   
        </div> 
    </div>
    <footer>
        <div class="container-fluid color4">
        <div class="row"></div>
            <div class="col-xs-14"style="background: #009688;"  >
        <center><h4><font color="black">COPY&RIGTH &COPY; EQUIPO 3 - Verano de Ingenieria Web</font></h4>
            <center><h5><font color="black">ORTEGA JOSE LUIS, GARCIA NOEL, SANCHEZ JOSUE, PEREZ JOEL, VALENZUELA ROBERTO, RAMIREZ ARIEL</font></h5>
    </div>  
</footer class="container">
</body>
</html>
