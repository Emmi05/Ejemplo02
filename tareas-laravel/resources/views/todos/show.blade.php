@extends('app')

@section('content')
<!-- editar  -->
<div class="container w-50 border p-4">
    <form action="{{ route('todos-update', ['id' => $todo->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error('title')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="title" class="form-label">Título de la tarea</label>
            <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    </div>
</div>
@endsection

