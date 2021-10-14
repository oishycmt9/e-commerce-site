@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">Test Category</h1>
            </div>
            <div class="row">
                        <!--1st row-->
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom: 20px;">
                            <div class="card-header bg-grey text-black" >
                                Add new Category
                            </div>
                            <br>
                            <div class="card-body">
                                <form method="POST" action="{{ route('category-one/store-one') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-9">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                            <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description"  required autocomplete="description">{{ old('description') }}</textarea>

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
                                            <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" required autocomplete="logo">

                                            @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group ">
                                        <div class="col-md-12" style="text-align: right;">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Save') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        <!--2nd row-->
                <div class="col-md-8">
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header bg-grey text-black">
                            Category Information
                        </div>
                        <div class="card-body">
                            <br>
                            <table class="table table-sm table-striped" id="myTable">
                                <thead class="table-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Logo Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($n=1)
                                @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$n++}}</td>
                                        <td>
                                            <img src="{{asset('/')}}{{$cat->logo}}" style="width:40px; height:40px; border-radius:50%;" alt="">
                                        </td>
                                        <td>{{$cat->name}}</td>
                                        <td>{!!Str::words($cat->description,5) !!}</td>
                                        <td>
                                            @if($cat->status==1)
                                                <i class="fa fa-check text-success"></i>
                                            @else
                                                <i class="fa fa-window-close text-danger"></i>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('category-one/edit-one',['id'=>$cat->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                            <a href="{{route('category-one/delete-one',['id'=>$cat->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this Category?')"> <i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
