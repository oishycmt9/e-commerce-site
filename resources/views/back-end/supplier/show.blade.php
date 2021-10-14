@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('supplier/create')}}" class="btn btn-success">Create Supplier</a>
                <hr>
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Profile Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($suppliers as $sup)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>
                                <img src="{{asset('/')}}{{$sup->profile_picture}}" style="width:40px; height:40px; border-radius:50%;" alt="">
                            </td>
                            <td>{{$sup->name}}</td>
                            <td>{!! $sup->description !!}</td>
                            <td>{{$sup->contact}}</td>
                            <td>{{$sup->email}}</td>
                            <td>
                                @if($sup->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('supplier/edit',['id'=>$sup->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('supplier/details',['id'=>$sup->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                <a href="{{route('supplier/delete',['id'=>$sup->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this supplier?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

