<?php

namespace App\Interfaces;

interface IPostRepository
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function delete($id);
}