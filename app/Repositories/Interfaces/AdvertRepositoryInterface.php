<?php

namespace App\Repositories\Interfaces;

interface AdvertRepositoryInterface{

    public function getAll();
    public function store($data);
    public function findOne($id);
    public function update($data, $id);
    public function delete($id);

}
