<?php

namespace App\Repositories;

use App\Interfaces\ITagRepository;
use App\Models\Tag;

class TagRepository implements ITagRepository
{
    public function all()
    {
        return Tag::orderBy('id', 'DESC')->paginate(8);
    }

    public function create(array $tag)
    {
        $data = new Tag();
        $data->name = $tag['name'];
        $data->save();
        return $data;
    }

    public function find($id)
    {
        return Tag::find($id);
    }

    public function delete($id)
    {
        return Tag::find($id)->delete();
    }
}
