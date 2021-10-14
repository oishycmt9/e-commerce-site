@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Supplier') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('supplier/update') }}" enctype="multipart/form-data">
                            @csrf
{{--                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">--}}
                            <input type="hidden" name="id" value="{{$sup->id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $sup->name }}" required autocomplete="name" autofocus>

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
                                    <textarea id="editor1" class="form-control @error('description') is-invalid @enderror" name="description" >{{ $sup->description }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="profile_picture" class="col-md-3 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-9">
                                    <input id="profile_picture" type="file" class="form-control-file @error('profile_picture') is-invalid @enderror" name="profile_picture"  autocomplete="profile_picture" autofocus>
                                    <img src="{{asset('/')}}{{$sup->profile_picture}}" style="width:40px; height:40px; border-radius:50%;" >
                                    @error('profile_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact" class="col-md-3 col-form-label text-md-right">{{ __('Contact') }}</label>

                                <div class="col-md-9">
                                    <input id="contact" type="text"  class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{$sup->contact}}"  required autocomplete="contact">

                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$sup->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="website" class="col-md-3 col-form-label text-md-right">{{ __('Website') }}</label>

                                <div class="col-md-9">
                                    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{$sup->website}}" required autocomplete="website">

                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-9">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$sup->address}}" required autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="postal_code" class="col-md-3 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                                <div class="col-md-9">
                                    <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{$sup->postal_code}}" required autocomplete="postal_code" autofocus>

                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-3 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-9">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$sup->city}}" required autocomplete="city" autofocus>

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-3 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-9">
                                    <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$sup->country}}" required autocomplete="country" autofocus>

                                    @error('country')
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
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="1" required {{$sup->status=='1'?'checked':''}}> Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="0" required {{$sup->status=='0'?'checked':''}}> Unpublished
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
                                <div class="col-md-6" style="text-align: right;">
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

