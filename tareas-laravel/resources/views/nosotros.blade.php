@extends ('app')

@section('content')
<style>
    .titulo{
        font-family:sans-serif;

    }
</style>
<script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
<div class="container mt-4">
    
    <h1 id="typed-text" class="titulo"></h1>
    <span class="hora"></span>

    @foreach($equipo as $item)
    <a href="{{ route('nosotros',$item) }}" class="h4 text-dark">{{$item}}</a> <br>
    @endforeach
    @if(!empty($nombre))
        @switch($nombre)

         @case($nombre=='Ixchell')
         <h2 class="fw-bold text-info">El nombre es {{ $nombre }}:</h2>
         <p>{{$nombre}} es la lider de los pollitos, llamados niños perdidos </p>
         <center><img src="https://i.pinimg.com/564x/e5/0e/9f/e50e9fca5677661dfb107d29adb5dded.jpg" alt=""></center>
        
         @break
            @case($nombre=='Emma')
            <h2 class="mt-5 fw-bold text-info">El nombre es {{ $nombre }}:</h2>
            <p>{{$nombre}} es la mas enojona pero asi la quiero </p>
            <center><img src="https://i.pinimg.com/564x/d7/27/d3/d727d32b9969233b1aaedf606a65e5c3.jpg" alt="" height="300"></center>
            @break
            @case($nombre=='Melani')
            <h2 class="mt-5 fw-bold text-info">El nombre es {{ $nombre }}:</h2>
            <p>{{$nombre}} no sabia que se llamaba Estefania xd </p>
           <center> <img src="https://i.pinimg.com/564x/bf/8e/72/bf8e72b824538a98ec481ee86d7bea2e.jpg" alt="" width="150"></center>
            @break
            @case($nombre=='Sara')
            <h2 class="mt-5 fw-bold text-info">El nombre es {{ $nombre }}:</h2>
            <p>{{$nombre}} es la jefasa de grupo xd </p>
           <center> <img src="https://i.pinimg.com/564x/bc/ea/39/bcea396fcd6a118b72ddfbe626285375.jpg" alt=""></center>
            @break
           
        @endswitch
    @endif
<div>
 <!--// Typed Text //-->
 <script>
        new TypeIt("#typed-text", {
          strings: "Nosotros somos empis",
          speed: 100,
          loop: true
        }).go();
      
    </script>

@endsection