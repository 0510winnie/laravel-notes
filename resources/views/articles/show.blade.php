@extends('layouts.app')

@section('app.content')


	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card my-3">
					<div class="card-body">
						<h1 class="card-title">Disply Article</h1>
						<div>Title: {{ $article->title }}</div>
						<div>Content: {{ $article->content }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection