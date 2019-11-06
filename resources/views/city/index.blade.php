@extends('home')
@section('title','city list')
@section('content')
    <a href="{{route('cities.create')}}" class="btn btn-danger">Add new city</a>
    <form action="{{route('cities.search')}}" method="get">
        <label>
            <input type="text" name="search" placeholder="Which City ???">
        </label>
        <input type="submit" value="Search">
    </form>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">City Name</th>
            <th scope="col">City Description</th>
            <th scope="col">City image</th>
            <th scope="col">Country</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($cities as $key =>$city)
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$city->city_name}}</td>
                <td>{{$city->city_desc}}</td>
                <td>
                    <img src="{{asset('storage/'.$city->city_image)}}" alt="map of {{$city->city_name}}">
                </td>
                <td>{{$city->country->country_name}}</td>

                <td>
                    <a href="{{route('cities.destroy',$city->id)}}" class="btn btn-outline-primary">Delete</a>
                    <a href="{{route('cities.edit',$city->id)}}" class="btn btn-outline-primary">Edit</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
