<?php

namespace App\Interfaces;

interface ICompanyRepository
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function delete($id);
}