@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('brand/create')}}" class="btn btn-success">Create Brand</a>
                <hr>
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
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$n++}}</td>
                            <td><img src="{{asset('/')}}{{$brand->logo}}" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></td>
                            <td>{{($brand->name)}}</td>
                            <td>{!! Str::words($brand->description,5) !!}</td>
                            <td>
                                @if($brand->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('brand/edit',['id'=>$brand->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('brand/delete',['id'=>$brand->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this brand?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

