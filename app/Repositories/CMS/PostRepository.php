<?php
namespace App\Repositories;

use App\Interfaces\IPostRepository;
use App\Models\Post;

class PostRepository implements IPostRepository
{

    public function all()
    {
        return Post::orderBy('id','DESC')->paginate(8);
    }

    public function create(array $post)
    {
        $data = new Post();
        $data->title = $post['title'];
        $data->content = $post['content'];
        $data->image = $post['image'];

        $data->save();
        return $data;
    }

    public function find($id)
    {
        return Post::find($id);
    }

    public function delete($id)
    {
        return Post::find($id)->delete();
    }
}