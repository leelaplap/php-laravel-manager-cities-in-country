@extends('home')
@section('title','add country')
@section('content')
    <form method="post" action="{{route('countries.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
            <label>Country Name</label>
            <label>
                <input type="text" class="form-control"  placeholder="Enter Country Name" name="country_name">
            </label>
        </div>
        <div class="form-group">
            <label>Country Code</label>
            <label>
                <input type="text" class="form-control" placeholder="Enter Country Code" name="country_code">
            </label>
        </div>
        <div class="form-group">
            <label>Country Area</label>
            <label>
                <input type="text" class="form-control" placeholder="Enter Country Area" name="country_area">
            </label>
        </div>
        <div>
            <label>Country Map</label>
            <input type="file" class="form-control-file" name="country_map">
        </div>
        <button type="submit" class="btn btn-primary">Add new country</button>
    </form>
@endsection
