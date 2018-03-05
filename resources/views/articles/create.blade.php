@extends('layouts.app')

@section('app.content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">

				<div class="card my-3">
					<div class="card-body">
						<h2 class="card-title">Create Article</h2>
						<form action="{{ route('articles.store') }}" method="POST">
							
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
							@include('articles.form')

							<div class="form-group text-right">
								<input type="submit" value="Create" class="btn btn-primary">
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>


@endsection