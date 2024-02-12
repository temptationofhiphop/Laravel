@extends('layout')

@section('content')
	<article>
		<h1>
			{!! $post -> title !!}
		</h1>

			<div>
				{!! $post -> body !!}
			</div>
		</h1>
	</article>
@endsection