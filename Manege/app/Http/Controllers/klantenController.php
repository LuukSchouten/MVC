<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\klanten;

class klantenController extends Controller
{
    /**
     * Sla een nieuwe klant op in de database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //CREATE

    //READ
    public function getUserData(){
        $users = DB::table('klanten')->select('id', 'naam','achternaam','tel')->get();

        return view('klantenBeheer')->with('klanten', $users);
    }

    //UPDATE

    //DELETE
    
}
