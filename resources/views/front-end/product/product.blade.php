@extends('front-end.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">Product</h1>
            </div>
            @foreach($products as $product)
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info">
                            {{$product->name}}
                        </div>
                        <div class="card-body">
                            {{$product->description}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
