<?php


namespace App\Http\Services\Imple;


use App\Country;
use App\Http\Repositories\CountryRepositoryInterface;
use App\Http\Services\CountryServiceInterface;
use Illuminate\Support\Facades\File;

class CountryService implements CountryServiceInterface
{
    protected $countryRepository;

    public function __construct(CountryRepositoryInterface $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    public function getAll()
    {
        return $this->countryRepository->getAll();
    }

    public function add($object)
    {
        $country = new Country();
        $country->country_name = $object->country_name;
        $country->country_code = $object->country_code;
        $country->country_area = $object->country_area;
        if (!$object->hasFile('country_map')) {
            $country->country_map = $object->country_map;
        } else {
            $map = $object->file('country_map');
            $path = $map->store('image', 'public');
            $country->country_map = $path;
        }

        $this->countryRepository->save($country);
    }

    public function findCountryById($id)
    {
        return $this->countryRepository->findCountryById($id);
    }

    public function edit($object, $id)
    {
        $country = $this->countryRepository->findCountryById($id);
        $country->country_name = $object->country_name;
        $country->country_code = $object->country_code;
        $country->country_area = $object->country_area;
        if ($object->country_map) {
            $this->countryRepository->delete($country,$id);
            $map = $object->file('country_map');
            $path = $map->store('image', 'public');
            $country->country_map = $path;
        }
        $this->countryRepository->save($country);
    }

    public function delete($id)
    {
        $country = $this->countryRepository->findCountryById($id);
        return $this->countryRepository->delete($country,$id);
    }

    public function search($object)
    {
        $search = $object->get('search');
        return $this->countryRepository->search($search);
    }
}
