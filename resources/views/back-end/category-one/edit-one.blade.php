@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('category-one/update-one') }}" enctype="multipart/form-data">
                            @csrf
                            {{--                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">--}}
                            <input type="hidden" name="id" value="{{$cat->id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $cat->name }}" required autocomplete="name" autofocus>

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
                                    <textarea id="editor1" class="form-control @error('description') is-invalid @enderror" name="description" >{{ $cat->description }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-md-3 col-form-label text-md-right">{{ __('Logo') }}</label>

                                <div class="col-md-9">
                                    <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo" value="{{ $cat->logo }}"  autocomplete="logo" autofocus>
                                    <img src="{{asset('/')}}{{$cat->logo}}" style="width: 40px; height: 40px; border-radius: 50%;">
                                    @error('logo')
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
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="1" required {{$cat->status=='1'?'checked':''}}> Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="0" required {{$cat->status=='0'?'checked':''}}> Unpublished
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
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection


