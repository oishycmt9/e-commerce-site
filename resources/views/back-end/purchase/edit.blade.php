@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Purchase') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('purchase/update') }}" >
                            @csrf
                            <input type="hidden" name="id" value="{{$purchase->id}}">
                            <div class="form-group row">
                                <label for="product_id" class="col-md-3 col-form-label text-md-right">{{ __('Product') }}</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="product_id" id="product_id" required>
                                        <option value="">--Select Product--</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}" {{$product->id==$purchase->product_id?'selected':''}}>{{$product->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('product_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="supplier_id" class="col-md-3 col-form-label text-md-right">{{ __('Supplier ') }}</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="supplier_id" id="supplier_id" required>
                                        <option value="">--Select Supplier--</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}" {{$supplier->id==$purchase->supplier_id?'selected':''}}>{{$supplier->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('supplier_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantity" class="col-md-3 col-form-label text-md-right">{{ __('Quantity') }}</label>

                                <div class="col-md-9">
                                    <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{$purchase->quantity}}" required autocomplete="quantity" autofocus>

                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="purchase_price" class="col-md-3 col-form-label text-md-right">{{ __('Purchase Price') }}</label>

                                <div class="col-md-9">
                                    <input id="purchase_price" type="text" class="form-control @error('purchase_price') is-invalid @enderror" name="purchase_price" value="{{$purchase->purchase_price}}" required autocomplete="purchase_price" autofocus>

                                    @error('purchase_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="regular_price" class="col-md-3 col-form-label text-md-right">{{ __('Regular Price') }}</label>

                                <div class="col-md-9">
                                    <input id="regular_price" type="text" class="form-control @error('regular_price') is-invalid @enderror" name="regular_price" value="{{$purchase->regular_price}}" required autocomplete="regular_price" autofocus>

                                    @error('regular_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sell_price" class="col-md-3 col-form-label text-md-right">{{ __('Sell Price') }}</label>

                                <div class="col-md-9">
                                    <input id="sell_price" type="text" class="form-control @error('sell_price') is-invalid @enderror" name="sell_price" value="{{$purchase->sell_price}}" required autocomplete="sell_price" autofocus>

                                    @error('sell_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-3 form-check-label text-md-right">{{ __('Status') }}</label>

                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="1" required {{$purchase->status=='1'?'checked':''}}> Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="0" required {{$purchase->status=='0'?'checked':''}}> Unpublished
                                        </label>
                                    </div>

                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

