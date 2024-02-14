@extends('layout')

@section('content')
	<article>
		
		<h1>
			{!! $post -> title !!}
		</h1>

		<p>
			By <a href="/authors/{{$post->author->id}}">{{$post -> author -> name}}</a> 
			in <a href="/categories/{{$post -> category -> slug}}">{{$post -> category -> name}}</a>
		</p>

		<div>
			{!! $post -> body !!}
		</div>

	</article>
@endsection