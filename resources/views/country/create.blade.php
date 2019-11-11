@extends('home')
@section('title','add country')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="post" action="{{route('countries.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Country Name</label>
                    <label>
                        <input type="text" class="form-control
                    @if($errors->has('country_name'))
                            border-danger
                    @endif
                            " placeholder="Enter Country Name" name="country_name">
                    </label>
                    @if($errors->has('country_name'))
                        <p class="text-danger">{{$errors->first('country_name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Country Code</label>
                    <label>
                        <input type="text" class="form-control
                       @if($errors->has('country_code'))
                            border-danger
                    @endif
                            " placeholder="Enter Country Code" name="country_code">
                    </label>
                    @if($errors->has('country_code'))
                        <p class="text-danger">{{$errors->first('country_code')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Country Area</label>
                    <label>
                        <textarea type="text" class="form-control
                    @if($errors->has('country_area'))
                            border-danger
                    @endif
                            " placeholder="Enter Country Area" name="country_area"></textarea>
                    </label>
                    @if($errors->has('country_area'))
                        <p class="text-danger">{{$errors->first('country_area')}}</p>
                    @endif
                </div>
                <div>
                    <label>Country Map</label>
                    <input type="file" class="form-control-file" name="country_map">
                </div>
                <button type="submit" class="btn btn-primary">Add new country</button>
            </form>
        </div>
    </div>
@endsection
