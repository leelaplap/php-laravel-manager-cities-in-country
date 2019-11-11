<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Http\Requests\ValidationRequest;
use App\Http\Services\CityServiceInterface;
use App\Http\Services\CountryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class CityController extends Controller
{
    protected $cityService;
    protected $countryService;

    public function __construct(CityServiceInterface $cityService,
                                CountryServiceInterface $countryService)
    {
        $this->cityService = $cityService;
        $this->countryService = $countryService;
    }

    public function index()
    {
        $cities = $this->cityService->getAll();
        return view('city.index', compact('cities'));

    }

    public function create()
    {
        $countries = $this->countryService->getAll();
        return view('city.create', compact('countries'));
    }

    public function store(ValidationRequest $request)
    {

        $this->cityService->add($request);
        return redirect()->route('cities.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $city = $this->cityService->findCityById($id);
        $countries = $this->countryService->getAll();
        return view('city.edit', compact('city', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $this->cityService->edit($request,$id);
        return redirect()->route('cities.index');
    }

    public function destroy($id)
    {
        $this->cityService->delete($id);
        return redirect()->route('cities.index');
    }

    public function search(Request $request)
    {
        $cities = $this->cityService->search($request);
        return view('city.index', compact('cities'));
    }
}
