@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('product/create')}}" class="btn btn-success">Create Product</a>
                <hr>
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Supplier</th>
                        <th>Unit</th>
                        <th>Regular Price</th>
                        <th>Sell Price</th>
                        <th>Status</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$n++}}</td>
                            <td><img src="{{asset('/')}}{{$product->image}}" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></td>
                            <td>{{($product->name)}}</td>
                            <td>{!! Str::words($product->description,5) !!}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->brand}}</td>
                            <td>{{$product->supplier}}</td>
                            <td>{{$product->unit}}</td>
                            <td>{{$product->regular_price}}</td>
                            <td>{{$product->sell_price}}</td>
                            <td>
                                @if($product->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('product/edit',['id'=>$product->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('product/details',['id'=>$product->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                <a href="{{route('product/delete',['id'=>$product->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this product?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

