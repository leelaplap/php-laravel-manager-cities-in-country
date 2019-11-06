@extends('home')
@section('title','country list')
@section('content')
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Country Name</th>
            <th scope="col">Country Code</th>
            <th scope="col">Country Area</th>
            <th scope="col">Country Map</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($countries as $key =>$country)
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$country->country_name}}</td>
                <td>{{$country->country_code}}</td>
                <td>{{$country->country_area}}</td>
                <td>
                    <img src="{{asset('storage/'.$country->country_map)}}" alt="map of {{$country->country_name}}">
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
