@extends('app')

@section('content')
<!-- <link rel="stylesheet" href="../resources/css/app.css"> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .titu{
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

button {
margin: 20px;
}
.custom-btn {
width: 130px;
height: 40px;
color: #fff;
border-radius: 5px;
padding: 10px 25px;
font-family: 'Lato', sans-serif;
font-weight: 500;
background: transparent;
cursor: pointer;
transition: all 0.3s ease;
position: relative;
display: inline-block;
box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
7px 7px 20px 0px rgba(0,0,0,.1),
4px 4px 5px 0px rgba(0,0,0,.1);
outline: none;
}


/* 5 */
.btn-5 {
    width: 130px;
    height: 40px;
    line-height: 42px;
    padding: 0;
    border: none;
    background: rgb(255,27,0);
  background: linear-gradient(0deg, rgba(255,27,0,1) 0%, rgba(251,75,2,1) 100%);
  }
  .btn-5:hover {
    color: #f0094a;
    background: transparent;
     box-shadow:none;
  }
  .btn-5:before,
  .btn-5:after{
    content:'';
    position:absolute;
    top:0;
    right:0;
    height:2px;
    width:0;
    background: #f0094a;
    box-shadow:
     -1px -1px 5px 0px #fff,
     7px 7px 20px 0px #0003,
     4px 4px 5px 0px #0002;
    transition:400ms ease all;
  }
  .btn-5:after{
    right:inherit;
    top:inherit;
    left:0;
    bottom:0;
  }
  .btn-5:hover:before,
  .btn-5:hover:after{
    width:100%;
    transition:800ms ease all;
  }
  
  
/* 15 */
    .btn-15 {
      background: #b621fe;
      border: none;
      z-index: 1;
    }
    .btn-15:after {
      position: absolute;
      content: "";
      width: 0;
      height: 100%;
      top: 0;
      right: 0;
      z-index: -1;
      background-color: #663dff;
      border-radius: 5px;
       box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
       7px 7px 20px 0px rgba(0,0,0,.1),
       4px 4px 5px 0px rgba(0,0,0,.1);
      transition: all 0.3s ease;
    }
    .btn-15:hover {
      color: #fff;
    }
    .btn-15:hover:after {
      left: 0;
      width: 100%;
    }
    .btn-15:active {
      top: 2px;
    }
    
    
</style>


<!-- w=whith -->
<div class="container w-50 border p-4 mt-4 :">
    <form action="{{route('todos')}}" method="POST">
        <!-- metodo post es para enviar ahi mismo? -->
        @csrf

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error('title')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="title" class="form-label fw-bold fs-4 text-secondary titu">Titulo de la tarea</label>
           

            <input type="text" name="title" class="form-control">
        </div>
<!-- 
        <button type="submit" class="btn btn-primary">Enviar</button> -->
        <center><button class="submit custom-btn btn-5">Enviar</button></center>
    </form>

    <div >
        @foreach ($todos as $todo)
        <!-- editar? -->
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center fw-bold fs-5">
                    <a href="{{ route('todos-edit', ['id' => $todo->id]) }}">{{ $todo->title }}</a>
                </div>
<!-- eliminar -->
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('todos-destroy', [$todo->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <!-- <button class="btn btn-danger btn-sm">Eliminar</button> -->
                        <button class="custom-btn btn-15" onclick="eliminar(id);"> Eliminar</button>
                    </form>
                    
                </div>
            </div>
        @endforeach
    </div>
    
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

function eliminar(){


Swal.fire(
    'Seguro',
    'No podras desacerlo?',
    'question'
  )
//  aqui poner el confirmar 
}



// function MostrarAlerta(titulo, descricion, tipoAlerta){
//     Swal.fire(
//     titulo,
//     descricion,
//     tipoAlerta
//     );
// }

</script>

@endsection