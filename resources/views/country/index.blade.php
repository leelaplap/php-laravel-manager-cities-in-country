@extends('home')
@section('title','country list')
@section('content')
    <a href="{{route('countries.create')}}" class="btn btn-danger">Add new country</a>
    <form action="{{route('countries.search')}}" method="get">
        <label>
            <input type="text" name="search" placeholder="Which Country ???">
        </label>
        <input type="submit" value="Search">
    </form>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Country Name</th>
            <th scope="col">Country Code</th>
            <th scope="col">Country Area(Km2)</th>
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
                <td>
                    <a href="{{route('countries.destroy',$country->id)}}" class="btn btn-outline-primary">Delete</a>
                    <a href="{{route('countries.edit',$country->id)}}" class="btn btn-outline-primary">Edit</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {{$countries->links()}}
@endsection
