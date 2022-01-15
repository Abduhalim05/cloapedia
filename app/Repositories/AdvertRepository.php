<?php

namespace App\Repositories;
use App\Models\Advertising;

use App\Repositories\Interfaces\AdvertRepositoryInterface;

class AdvertRepository implements AdvertRepositoryInterface
{

    public function getAll()
    {
       return Advertising::all();
    }

    public function store($request){
        $data=$request->all();
        if ($request->hasFile('image_1200_1200') ) {
            $file=$request->image_1200_1200;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/advertisings/', $image_name);
            $data['image_1200_1200']=$image_name;
        }

        if ($request->hasFile('image_728_90')) {
            $file=$request->image_728_90;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/advertisings/', $image_name);
            $data['image_728_90']=$image_name;
        }

        $advert=Advertising::create($data);


        return true;
    }
    public function findOne($id){
        return Advertising::findOrFail($id);
    }

    public function update($request, $id){
        $advert=$this->findOne($id);

        $data=$request->all();
        if ($request->hasFile('image_1200_1200') ) {
            $file=$request->image_1200_1200;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/advertisings/', $image_name);
            $data['image_1200_1200']=$image_name;
        }

        if ($request->hasFile('image_728_90')) {
            $file=$request->image_728_90;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/advertisings/', $image_name);
            $data['image_728_90']=$image_name;
        }
        $advert->update($data);
    }
    public function delete($id){
        return Advertising::destroy($id);
    }
}


