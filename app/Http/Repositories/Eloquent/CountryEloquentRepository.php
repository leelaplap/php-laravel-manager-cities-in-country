<?php


namespace App\Http\Repositories\Eloquent;


use App\Country;
use App\Http\Repositories\CountryRepositoryInterface;
use Illuminate\Support\Facades\File;

class CountryEloquentRepository implements CountryRepositoryInterface
{


    public function getAll()
    {
        return Country::paginate(5);
    }

    public function save($object)
    {
        $object->save();
    }

    public function findCountryById($id)
    {
        return Country::findOrFail($id);
    }

    public function delete($object,$id)
    {
        $country = $this->findCountryById($id);
        File::delete(storage_path("app/public/$country->country_map"));
        $object->delete();
    }

    public function search($object)
    {
        return Country::where('country_name', 'LIKE', "%$object%")->paginate(2);
    }
}
