@extends('layout.main')

@section('content')
<h1>Crear tarea</h1>
<form action="/tasks" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Título</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Ingrese el nombre de su tarea">
    </div>
    <div class="form-group">
      <label for="description">Descripción</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
