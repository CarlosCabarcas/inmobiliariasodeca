@extends('template')

@section('content')
<section class="container">
		<div class="row">
		<h2 class="center-align">Contactanos</h2>
			<article class="col s6 offset-s3">
					@if(\Session::has('mensaje'))
						@include('layouts.mensaje')
					@endif
				<form method="POST" action="{{ route('enviar') }}">
					{!! csrf_field() !!}
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="subject">Asunto</label>
						<input type="text" name="subject" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">email</i>
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">message</i>
						<label for="mensaje">Mensaje</label>
						<textarea name="body" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>

					<p class="center-align">
						<button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>
		</div>
	</section>

@stop

@section('activecontacto')
  current
@stop
