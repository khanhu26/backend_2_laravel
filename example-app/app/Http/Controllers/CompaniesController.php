<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CompaniesController extends Controller
{
    public function companies(){
        $obj = new Companies();
        $companies = $obj->paginate(10);

        //$f = $obj->where('company_id', '=', 1)->first();
        //dd($f->toArray());
        return view('companies',['companies'=>$companies]);
    }
}
