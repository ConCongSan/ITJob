<?php

namespace App\Repositories;

use App\Interfaces\IRoleRepository;
use App\Models\Role;

class RoleRepository implements IRoleRepository
{

    public function all()
    {
        return Role::orderBy('id', 'DESC')->paginate(8);
    }

    public function create(array $role)
    {
        $data = new Role();
        $data->name = $role['name'];
        $data->save();
        return $data;
    }

    public function find($id)
    {
        return Role::find($id);
    }

    public function delete($id)
    {
        return Role::find($id)->delete();
    }
}