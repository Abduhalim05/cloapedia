<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use HasFactory, Commentable;

    protected $fillable=['title','description','body','image','status','slug','view'];

    public function categories(){
        return $this->belongsToMany(Category::class, 'post_category');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

}
