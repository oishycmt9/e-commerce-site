@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('purchase/create')}}" class="btn btn-success">Create Purchase</a>
                <hr>
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Supplier</th>
                        <th>Quantity</th>
                        <th>Purchase Price</th>
                        <th>Regular Price</th>
                        <th>Sell Price</th>
                        <th>Status</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($purchases as $purchase)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{$purchase->product}}</td>
                            <td>{{($purchase->supplier)}}</td>
                            <td>{{$purchase->quantity}}</td>
                            <td>{{$purchase->purchase_price}}</td>
                            <td>{{$purchase->regular_price}}</td>
                            <td>{{$purchase->sell_price}}</td>
                            <td>
                                @if($purchase->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('purchase/edit',['id'=>$purchase->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('purchase/delete',['id'=>$purchase->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this purchase?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

