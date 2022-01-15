<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Product extends Model
{
    use HasFactory;
    public function group()
    {
       return $this->belongsTo(Group::class, 'group_id');
    }
    protected $fillable=[
        'group_id',
        'name',
        'price',
        'image',
    ];
}
