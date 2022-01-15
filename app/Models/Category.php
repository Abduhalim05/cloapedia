<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Menu;
class Category extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_category');
    }
    public function menu(){
        return $this->hasOne(Menu::class, 'category_id');
    }
    protected $fillable=['name', 'slug'];
}
