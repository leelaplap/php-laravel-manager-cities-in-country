<?php


namespace App\Http\Repositories;


interface CountryRepositoryInterface
{
    public function getAll();

    public function save($object);

    public function findCountryById($id);

    public function delete($object,$id);

    public function search($object);
}
