@extends('home')
@section('title','edit country')
@section('content')
    <form method="post" action="{{route('countries.update',$country->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
            <label>Country Name</label>
            <label>
                <input type="text" class="form-control"  placeholder="Enter Country Name" name="country_name" value="{{$country->country_name}}">
            </label>
        </div>
        <div class="form-group">
            <label>Country Code</label>
            <label>
                <input type="text" class="form-control" placeholder="Enter Country Code" name="country_code" value="{{$country->country_code}}">
            </label>
        </div>
        <div class="form-group">
            <label>Country Area</label>
            <label>
                <input type="text" class="form-control" placeholder="Enter Country Area" name="country_area" value="{{$country->country_area}}">
            </label>
        </div>
        <div>
            <label>Country Map</label>
            <img src="{{asset('storage/'.$country->country_map)}}" alt="map of {{$country->country_name}}">
            <input type="file" class="form-control-file" name="country_map">
        </div>
        <button type="submit" class="btn btn-primary">Edit the country</button>
    </form>
@endsection
