<?php


namespace App\Http\Services;


interface CityServiceInterface
{
    public function getAll();

    public function add($object);

    public function findCityById($id);

    public function edit($object, $id);

    public function delete($id);

    public function search($object);
}
