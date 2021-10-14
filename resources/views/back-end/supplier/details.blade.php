@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    <tr>
                        <th colspan="2">Supplier Details</th>
                    </tr>
                    <tr>
                        <th style="width:10%;">Name</th>
                        <td>{{$sup->name}}</td>
                    </tr>
{{--                    <tr>--}}
{{--                        <th>Description</th>--}}
{{--                        <td>{{$sup->description}}</td>--}}
{{--                    </tr>--}}
                    <tr>
                        <th>Website</th>
                        <td>{{$sup->website}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$sup->address}}</td>
                    </tr>
                    <tr>
                        <th>Postal Code</th>
                        <td>{{$sup->postal_code}}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{$sup->city}}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{$sup->country}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$sup->status}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{route('supplier/show')}}" class="btn btn-link">Back To Supplier List</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
