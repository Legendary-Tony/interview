@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-right"><a class="btn btn-primary" href="{{ route('addnew') }}">Add New</a></div>
                </div>
                <div class="card-body">
                    <table class="jumbotron table">
                        <th>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Qty</td>
                                <td>Price</td>
                                <td>Created At</td>
                                <td>Edit</td>
                            </tr>
                        </th>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                <td><a class="btn btn-success" href="{{ route('edit', $product->id) }}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection