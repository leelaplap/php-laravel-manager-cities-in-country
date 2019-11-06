@extends('home')
@section('title','add city')
@section('content')
    <form method="post" action="{{route('cities.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>City Name</label>
            <label>
                <input type="text" class="form-control" placeholder="Enter City Name" name="city_name" value="{{$city->city_name}}">
            </label>
        </div>
        <div class="form-group">
            <label>City Description</label>
            <label>
                <input type="text" class="form-control" placeholder="Enter City Description" name="city_desc" value="{{$city->city_desc}}">
            </label>
        </div>
        <div>
            <label>City Image</label>
            <img src="{{asset('storage/'.$city->city_image)}}" alt="image of{{$city->city_name}}">
            <input type="file" class="form-control-file" name="city_image"  >
        </div>
        <div class="form-group">
            <div class="form-group">
                <label>Select Country</label>
                <select class="form-control" name="country_id">
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit the city</button>
    </form>
@endsection
