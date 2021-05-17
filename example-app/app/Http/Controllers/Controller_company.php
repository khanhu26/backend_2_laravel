<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\Models\Model_company;

class Controller_company extends Controller{

    public function getCompanies(){
        $obj = new Model_company();
        $data['companies'] = Model_company::simplePaginate(3);
        return view('companies',$data);
    }
}

