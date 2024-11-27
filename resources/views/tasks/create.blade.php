@extends('layouts.app')

@section('content')

<div class="container">

    <div class="col-md-12 col-xs-12">
        <div class="row">
            <p class="headerTitle">Crear nueva Tarea</p>
        </div>

        <a type="button" class="btn btn-sm btn-info" href="{{ route('tasks.index') }}">Regresar Inicio</a>
        <br>
        <br>
        
        <form method="POST" action="{{ url('/store') }}" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="input_dni" class="form-label">DNI</label>
                <input type="text" class="form-control"  oninput="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="8" id="dni" name="dni">
            </div>
            <div class="col-md-6">
                <label for="input_titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-12">
                <label for="input_descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            
            <div class="col-md-6">
                <label for="input_fechav" class="form-label">Fecha vencimiento</label>
                <input type="date" class="form-control datetimepicker" id="due_date" name="due_date">
            </div>

            <div class="col-md-6"> 
                <label for="input_estado" class="form-label">Estado</label>
                <select id="status" class="form-control" name="status">
                    <option value="pending" selected>pending</option>
                    <option value="in_progress">in_progress</option>
                    <option value="completed">completed</option>
                </select>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>

    </div>
</div>

<script>
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/store', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token 
        },
        body: JSON.stringify({ dni: dni, title: title, description: description, due_date: due_date, status: status })
    });
</script>

@endsection
