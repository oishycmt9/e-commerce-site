@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    @foreach($product as $pro)
                    <tr>
                        <th colspan="2">Product Details</th>
                    </tr>
                    <tr>
                        <th style="width:10%;">Name</th>
                        <td>{{$pro->name}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{!! Str::words($pro->description,5) !!}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{$pro->category}}</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>{{$pro->brand}}</td>
                    </tr>
                    <tr>
                        <th>Supplier</th>
                        <td>{{$pro->supplier}}</td>
                    </tr>
                    <tr>
                        <th>Unit</th>
                        <td>{{$pro->unit}}</td>
                    </tr>
                        <tr>
                            <th>Regular Price</th>
                            <td>{{$pro->regular_price}}</td>
                        </tr>
                        <tr>
                            <th>Sell Price</th>
                            <td>{{$pro->sell_price}}</td>
                        </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{route('product/show')}}" class="btn btn-link">Back To Product List</a>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
