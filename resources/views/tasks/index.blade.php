@extends('layouts.app')

@section('content')

<div class="container">

    <div class="col-md-12 col-xs-12">
        <div class="row">
            <p class="headerTitle">Plataforma para Gestionar Tareas</p>
        </div>

        <a type="button" class="btn btn-sm btn-success" href="{{ route('tasks.create') }}">Crear nueva tarea</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->dni }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->status }}</td>
                        <td>
                            <a type="button" class="btn btn-sm btn-info" href="{{ route('tasks.show', $task) }}">Ver</a>
                            <a type="button" class="btn btn-sm btn-warning" href="{{ route('tasks.edit', $task) }}">Editar</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 

</div>








@endsection
