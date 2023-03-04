<?php

namespace App\Repositories;

interface IBaseRepository
{
    public function index();

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function show($id);
}