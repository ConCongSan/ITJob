<?php

namespace App\Repositories\Auth;

use App\Models\Post;
use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    public function getModel(): string
    {
        return User::class;
    }

    public function deleteAll($id)
    {
        $post = Post::find($id);
        return $post->post()->delete();
    }
}