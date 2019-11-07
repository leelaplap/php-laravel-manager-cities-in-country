<?php


namespace App\Http\Repositories\Eloquent;


use App\City;
use App\Country;
use App\Http\Repositories\CityRepositoryInterface;
use Illuminate\Support\Facades\File;

class CityEloquentRepository implements CityRepositoryInterface
{
    public function getAll()
    {
        return City::paginate(1);
    }

    public function save($object)
    {
        $object->save();
    }

    public function findCityById($id)
    {
        return City::findOrFail($id);
    }

    public function delete($object, $id)
    {
        $city = $this->findCityById($id);
        File::delete(storage_path("app/public/$city->city_image"));
        $object->delete();
    }

    public function search($object)
    {
        return City::where('city_name', 'LIKE', "%$object%")->paginate(5);
    }
}
