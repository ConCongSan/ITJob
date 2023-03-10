<?php

namespace App\Repositories;

use App\Interfaces\IUserRepository;
use App\Models\Post;
use App\Models\User;

class UserRepository implements IUserRepository
{

    public function all()
    {
        return User::orderBy('id','DESC')->paginate(8);
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function delete($id)
    {
        return User::find($id)->delete();
    }

    public function findEmail($email)
    {
        $isExist = User::where('email', $email)->first();
        if (empty($isExist)) {
            return true;
        } else {
            return false;
        }
    }
}