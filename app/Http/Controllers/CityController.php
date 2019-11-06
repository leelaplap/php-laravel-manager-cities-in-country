<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('city.index', compact('cities'));

    }

    public function create()
    {
        $countries = Country::all();
        return view('city.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->city_name = $request->city_name;
        $city->city_desc = $request->city_desc;
        if (!$request->hasFile('city_image')) {
            $city->city_image = $request->city_image;
        } else {
            $map = $request->file('city_image');
            $path = $map->store('image', 'public');
            $city->city_image = $path;
        }
        $city->country_id = $request->country_id;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        $countries = Country::all();
        return view('city.edit', compact('city', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->city_name = $request->city_name;
        $city->city_desc = $request->city_desc;
        if ($request->city_image) {
            File::delete(storage_path("app/public/$city->city_image"));
            $map = $request->file('city_image');
            $path = $map->store('image', 'public');
            $city->city_image = $path;
        }
        $city->country_id = $request->country_id;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        File::delete(storage_path("app/public/$city->city_image"));
        $city->delete();
        return redirect()->route('cities.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $cities = City::where('city_name', "LIKE", "%$search%")->get();
        return view('city.index', compact('cities'));
    }
}
