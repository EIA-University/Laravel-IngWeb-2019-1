@extends('layout.main')

@section('content')
<h1>Mis tareas</h1>
<ul>
    @foreach ($tareas as $tarea)
        <li>{{ $tarea->title }}</li>
    @endforeach
</ul>
@endsection
