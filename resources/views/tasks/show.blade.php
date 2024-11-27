@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12 col-xs-12">
        <div class="row">
            <p class="headerTitle">Ver Tarea</p>
        </div>

        <a type="button" class="btn btn-sm btn-info" href="{{ route('tasks.index') }}">Regresar Inicio</a>
        <br>
        <br>
        
        <div class="row g-3">
            <div class="col-md-6">
                <label for="input_dni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="dni" value="{{ $task->dni }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="input_titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" value="{{ $task->title }}" readonly>
            </div>
            <div class="col-12">
                <label for="input_descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" readonly>{{ $task->description }}</textarea>
            </div>

            <div class="col-md-6">
                <label for="input_fechav" class="form-label">Fecha de Vencimiento</label>
                <input type="date" class="form-control" id="due_date" value="{{ $task->due_date }}" readonly>
            </div>

            <div class="col-md-6">
                <label for="input_estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="status" value="{{ $task->status }}" readonly>
            </div>
        </div>
    </div>
</div>

@endsection
