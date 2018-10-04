@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">


			<form action="{{route('create.post')}}" method="POST">
				<input type="hidden" value="{{Session::token()}}" name="_token"/>
					<div class="form-group">
						<input type="text" class="form-control" name="title" id="new-post-title" placeholder="Your title here..."/>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your text here..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Create Post</button>
				</form>
				{{$posts}}
		</div>
	</div>
</div>
@endsection
