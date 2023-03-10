<?php

namespace App\Interfaces;

interface IReviewRepository
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function delete($id);
}