@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ route('update', $edit->id ) }}">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<div class="form-group">
							<input class="form-control" value="{{ $edit->name }}" type="text" name="name" placeholder="Enter product name">
						</div>
						<div class="form-group">
							<input class="form-control" value="{{ $edit->qty }}" type="text" name="qty" placeholder="Enter Product qty">
						</div>
						<div class="form-group">
							<input class="form-control" value="{{ $edit->price }}" type="text" name="price" placeholder="Enter product price">
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