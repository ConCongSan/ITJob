<?php
namespace App\Repositories;

use App\Interfaces\ICompanyRepository;
use App\Models\Company;

class CompanyRepository implements ICompanyRepository
{

    public function all()
    {
        return Company::orderBy('id','DESC')->paginate(8);
    }

    public function create(array $company)
    {
        $data = new Company();
        $data->name = $company['name'];

        $data->save();
        return $data;
    }

    public function find($id)
    {
        return Company::find($id);
    }

    public function delete($id)
    {
        return Company::find($id)->delete();
    }
}

