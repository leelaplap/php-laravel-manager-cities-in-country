<?php


namespace App\Http\Repositories;


interface CityRepositoryInterface
{
    public function getAll();

    public function save($object);

    public function findCityById($id);

    public function delete($object, $id);

    public function search($object);
}
