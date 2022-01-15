<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface{

    public function getAll();
    public function getAllCategories();
    public function getAllTags();
    public function store($data);
    public function findOne($id);
    public function findOneTag($id);
    public function update($data, $id);
    public function delete($id);


}
