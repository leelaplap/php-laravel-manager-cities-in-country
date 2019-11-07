<?php


namespace App\Http\Services;


interface CountryServiceInterface
{
    public function getAll();

    public function add($object);

    public function findCountryById($id);

    public function edit($object, $id);

    public function delete($id);

    public function search($object);
}
