@extends('home')
@section('title','add city')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="post" action="{{route('cities.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>City Name</label>
                    <label>
                        <input type="text" class="form-control
                        @if($errors->has('city_name'))
                            border-danger
                        @endif
                            " placeholder="Enter City Name" name="city_name">
                    </label>
                    @if($errors->has('city_name'))
                        <p class="text-danger">{{$errors->first('city_name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>City Description</label>
                    <label>
                        <input type="text" class="form-control
                        @if($errors->has('city_name'))
                            border-danger
                        @endif
                            " placeholder="Enter City Description" name="city_desc">
                    </label>
                    @if($errors->has('city_desc'))
                        <p class="text-danger">{{$errors->first('city_desc')}}</p>
                    @endif
                </div>
                <div>
                    <label>City Image</label>
                    <input type="file" class="form-control-file" name="city_image">
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
                <button type="submit" class="btn btn-primary">Add new city</button>
            </form>

        </div>
    </div>
@endsection
