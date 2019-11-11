<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\ValidationRequest;
use App\Http\Services\CountryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CountryController extends Controller
{
    protected $countryService;

    public function __construct(CountryServiceInterface $countryService)
    {
        $this->countryService = $countryService;
    }

    public function index()
    {
        $countries = $this->countryService->getAll();
        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(ValidationRequest $request)
    {
        $this->countryService->add($request);
        return redirect()->route('countries.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $country = $this->countryService->findCountryById($id);
        return view('country.edit', compact('country'));
    }

    public function update(ValidationRequest $request, $id)
    {
        $this->countryService->edit($request, $id);
        return redirect()->route('countries.index');
    }

    public function destroy($id)
    {
        $this->countryService->delete($id);
        return redirect()->route('countries.index');
    }

    public function search(Request $request)
    {
        $countries = $this->countryService->search($request);
        return view('country.index', compact('countries'));
    }
}
