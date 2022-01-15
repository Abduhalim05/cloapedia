<?php

namespace App\Repositories;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{

    public function getAll()
    {
       return Post::all();
    }

    public function getAllCategories()
    {
       return Category::all();
    }
    public function getAllTags()
    {
       return Tag::all();
    }

    public function store($request){
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/posts/', $image_name);
            $data['image']=$image_name;
        }
        $data['slug']=\Str::slug($request->title);
        $post=Post::create($data);
        $post->categories()->attach($request->category_id);
        $post->tags()->attach($request->tag_id);

        return true;
    }
    public function findOne($id){
        return Post::findOrFail($id);
    }
    public function findOneTag($id){
        $post1=Post::findOrFail($id);
        return $post1->tags;
    }
    public function update($request, $id){
        $post=$this->findOne($id);

        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/posts/', $image_name);
            $data['image']=$image_name;
        }
        $data['slug']=\Str::slug($request->title);
        $post->categories()->sync($request->category_id);
        $post->tags()->sync($request->tag_id);
        $post->update($data);
    }
    public function delete($id){
        $post=Post::find($id);
        $post->categories()->detach();
        $post->tags()->detach();

        return Post::destroy($id);
    }
}


