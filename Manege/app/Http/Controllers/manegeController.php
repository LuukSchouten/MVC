<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manegeController extends Controller
{
    //
    function insertCustomerData(Request $req){
        print_r($req->input());
    }
}
