@extends('layouts.app')

@section('content')

<div class="container">

    <div class="col-md-12 col-xs-12">
        <div class="row">
            <p class="headerTitle">Editar Tarea</p>
        </div>

        <a type="button" class="btn btn-sm btn-info" href="{{ route('tasks.index') }}">Regresar Inicio</a>
        <br>
        <br>
        
        <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="row g-3">
            @csrf
            @method('PATCH')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-6">
                <label for="input_dni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ old('dni', $task->dni) }}">
            </div>
            <div class="col-md-6">
                <label for="input_titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $task->title) }}">
            </div>
            <div class="col-12">
                <label for="input_descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $task->description) }}">
            </div>

            <div class="col-md-6">
                <label for="input_fechav" class="form-label">Fecha vencimiento</label>
                <input type="date" class="form-control datetimepicker" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date) }}">
            </div>

            <div class="col-md-6">
                <label for="input_estado" class="form-label">Estado</label>
                <select id="status" class="form-control" name="status">
                    <option value="pending" {{ old('status', $task->status) == 'pending' ? 'selected' : '' }}>pending</option>
                    <option value="in_progress" {{ old('status', $task->status) == 'in_progress' ? 'selected' : '' }}>in_progress</option>
                    <option value="completed" {{ old('status', $task->status) == 'completed' ? 'selected' : '' }}>completed</option>
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>

@endsection
