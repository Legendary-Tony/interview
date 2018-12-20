@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ route('create') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<input class="form-control" type="text" name="name" placeholder="Enter product name">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="qty" placeholder="Enter Product qty">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="price" placeholder="Enter product price">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection