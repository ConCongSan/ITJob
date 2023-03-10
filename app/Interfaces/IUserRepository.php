<?php
namespace App\Interfaces;

interface IUserReponsitory
{
    public function all();
    public function create($data);
    public function find($id);
    public function delete($id);
}