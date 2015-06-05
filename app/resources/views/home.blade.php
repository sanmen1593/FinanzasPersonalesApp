@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">¡Bienvenido, {{Auth::user()->name}}!</div>
				
				<div class="panel-body">
					<p>
					<img src="{{Auth::user()->avatar}}" alt="">
					You are logged in!
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
