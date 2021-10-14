@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product/update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-9">
                                    <textarea id="editor1" class="form-control @error('description') is-invalid @enderror" name="description" >{{ $product->description }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-3 col-form-label text-md-right">{{ __('Image') }}</label>

                                <div class="col-md-9">
                                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"   autocomplete="image" autofocus>
                                    <img src="{{asset('/')}}{{$product->image}}" style="height: 40px; width: 40px; border-radius: 50%;">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-3 col-form-label text-md-right">{{ __('Category') }}</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="category_id" id="category_id" required>
                                        <option value="">--Select Category--</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id==$product->category_id?'selected':''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="brand_id" class="col-md-3 col-form-label text-md-right">{{ __('Brand') }}</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="brand_id" id="brand_id" required>
                                        <option value="">--Select Brand--</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" {{$brand->id==$product->brand_id?'selected':''}}>{{$brand->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('brand_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="supplier_id" class="col-md-3 col-form-label text-md-right">{{ __('Supplier') }}</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="supplier_id" id="supplier_id" required>
                                        <option value="">--Select Supplier--</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}" {{$supplier->id==$product->supplier_id?'selected':''}} >{{$supplier->name}}</option>
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
                                <label for="unit" class="col-md-3 col-form-label text-md-right">{{ __('Unit') }}</label>

                                <div class="col-md-9">
                                    <select class="form-control" name="unit" id="unit" value="{{ $product->unit }}" required>
                                        <option value="">--Select Unit--</option>
                                        <option value="piece" {{$product->unit=='piece'?'selected':''}}>Piece</option>
                                        <option value="box" {{$product->unit=='box'?'selected':''}}>Box</option>
                                        <option value="packet" {{$product->unit=='packet'?'selected':''}}>Packet</option>
                                        <option value="dozen" {{$product->unit=='dozen'?'selected':''}}>Dozen</option>
                                        <option value="kg" {{$product->unit=='kg'?'selected':''}}>KG</option>
                                        <option value="gallon" {{$product->unit=='gallon'?'selected':''}}>Gallon</option>
                                        <option value="litre" {{$product->unit=='litre'?'selected':''}}>Litre</option>
                                    </select>

                                    @error('unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="regular_price" class="col-md-3 col-form-label text-md-right">{{ __('Regular Price') }}</label>

                                <div class="col-md-9">
                                    <input id="regular_price" type="text" class="form-control @error('regular_price') is-invalid @enderror" name="regular_price" value="{{$product->regular_price}}" required autocomplete="regular_price" autofocus>

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
                                    <input id="sell_price" type="text" class="form-control @error('sell_price') is-invalid @enderror" name="sell_price" value="{{$product->sell_price}}" required autocomplete="sell_price" autofocus>

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
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="1" required {{$product->status=='1'?'checked':''}}> Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="0" required {{$product->status=='0'?'checked':''}}> Unpublished
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

