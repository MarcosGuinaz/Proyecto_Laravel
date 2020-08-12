@extends('plantilla')

@section('titulo', 'Portfolio')

@section('contenedor1')
	<h1>Portfolio</h1>
	<a href="{{ route('projects.create')}}">Crear proyecto</a>

	<ul>
			@forelse ($projects as $project)
				<li><a href="{{route('projects.show', $project)}}">{{ $project->title }}</a></li>
			@empty
				<li>No hay proyectos</li>
			@endforelse
			{{ $projects->links()}}
	</ul>

@endsection