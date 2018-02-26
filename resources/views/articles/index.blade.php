@extends('layouts.app')

@section('app.content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">

				<h3>Total Aritlces Count: {{ $articles->count() }} </h3>
				@foreach($articles as $article)
				<article class="card my-3">
					<div class="card-body">
						<h2 class="card-title">
							<a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
						</h2>
						<p>{{ $article->content }}</p>
						<div>
							<a href="{{ route('articles.edit', $article) }}">Edit</a>
							<form action="{{ route('articles.destroy', $article) }}" method="POST">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<input type="submit" value="Delete" class="btn btn-danger">
							</form>
						</div>
						<div class="text-right">
							{{ $article->created_at }}
						</div>
					</div>
				</article>
				@endforeach
			</div>
		</div>
	</div>


@endsection