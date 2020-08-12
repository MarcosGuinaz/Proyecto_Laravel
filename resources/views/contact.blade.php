@extends('plantilla')

@section('titulo', 'About')

@section('contenedor1')
	<h1>{{__('contact')}}</h1>

	<form method="POST" action="{{ route('messages.store')}}">
		@csrf
		<input name="name" placeholder="nombre..." value="{{ old('name')}}"><br>
			{!! $errors ->first('name', '<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="email..." value="{{ old('email')}}"><br>
			{!! $errors ->first('email', '<small>:message</small><br>') !!}

		<input name="subject" placeholder="asunto..." value="{{ old('subject')}}"><br>
			{!! $errors ->first('subject', '<small>:message</small><br>') !!}

		<textarea name="contect" placeholder="mensaje..."  value="{{ old('contect')}}"></textarea><br>
			{!! $errors ->first('contect', '<small>:message</small><br>') !!}

		<button>@lang('Send')</button>
	</form>
@endsection