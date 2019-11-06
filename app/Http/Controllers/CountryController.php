<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $country = new Country();
        $country->country_name = $request->country_name;
        $country->country_code = $request->country_code;
        $country->country_area = $request->country_area;
        if (!$request->hasFile('country_map')) {
            $country->country_map = $request->country_map;
        } else {
            $map = $request->file('country_map');
            $path = $map->store('image', 'public');
            $country->country_map = $path;
        }
        $country->save();
        return redirect()->route('countries.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->country_name = $request->country_name;
        $country->country_code = $request->country_code;
        $country->country_area = $request->country_area;
        if ($request->country_map) {
            File::delete(storage_path("app/public/$country->country_map"));
            $map = $request->file('country_map');
            $path = $map->store('image', 'public');
            $country->country_map = $path;
        }
        $country->save();
        return redirect()->route('countries.index');
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        File::delete(storage_path("app/public/$country->country_map"));
        $country->delete();
        return redirect()->route('countries.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $countries = Country::where('country_name', 'LIKE', "%$search%")->get();
        return view('country.index', compact('countries'));
    }
}
