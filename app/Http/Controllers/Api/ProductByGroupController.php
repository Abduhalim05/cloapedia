<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Product;
use App\Http\Resources\ProductByGroupResource;

class ProductByGroupController extends Controller
{
    public function get($id){
        $group=Group::find($id);
        $product=$group->products()->first();

        $products=[
            'product_name'=>$product->name,
            'product_price'=>$product->price

        ];
        $json=json_encode($products);
        return $json;

        // return new ProductByGroupResource($product);
    }
}
