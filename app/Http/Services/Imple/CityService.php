<?php


namespace App\Http\Services\Imple;


use App\City;
use App\Country;
use App\Http\Repositories\CountryRepositoryInterface;
use App\Http\Repositories\CityRepositoryInterface;
use App\Http\Services\CityServiceInterface;
use Illuminate\Support\Facades\File;

class CityService implements CityServiceInterface
{
    protected $cityRepository;

    public function __construct(CityRepositoryInterface $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function getAll()
    {
        return $this->cityRepository->getAll();
    }

    public function add($object)
    {
        $city = new City();
        $city->city_name = $object->city_name;
        $city->city_desc = $object->city_desc;
        if (!$object->hasFile('city_image')) {
            $city->city_image = $object->city_image;
        } else {
            $map = $object->file('city_image');
            $path = $map->store('image', 'public');
            $city->city_image = $path;
        }
        $city->country_id = $object->country_id;

        $this->cityRepository->save($city);
    }

    public function findCityById($id)
    {
        return $this->cityRepository->findCityById($id);
    }

    public function edit($object, $id)
    {
        $city = $this->cityRepository->findCityById($id);
        $city->city_name = $object->city_name;
        $city->city_desc = $object->city_desc;
        if ($object->city_image) {
            $this->cityRepository->delete($city, $id);
            $map = $object->file('city_image');
            $path = $map->store('image', 'public');
            $city->city_image = $path;
        }
        $city->country_id = $object->country_id;
        $this->cityRepository->save($city);
    }

    public function delete($id)
    {
        $city = $this->cityRepository->findCityById($id);
        return $this->cityRepository->delete($city, $id);
    }

    public function search($object)
    {
        $search = $object->get('search');
        return $this->cityRepository->search($search);
    }

}
