@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('category/create')}}" class="btn btn-success">Create Category</a>
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
                                <a href="{{route('category/edit',['id'=>$cat->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('category/delete',['id'=>$cat->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this category?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

