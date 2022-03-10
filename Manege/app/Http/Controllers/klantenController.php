<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Klanten;

class klantenController extends Controller
{
    /**
     * Sla een nieuwe klant op in de database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //CREATE
    public function createUser(){

        $data = $request->input();

        DB::table('klanten')->insert([
            'naam' => $data['naam'],
            'achternaam' => $data['achternaam'],
            'tel' => $data['tel'],
        ]);

        return redirect()->back();
    }

    //READ
    public function showUsers(){
        return view('klantenOverzicht', [
            'klanten' => Klanten::all()
        ]);
    }


    //UPDATE

    //DELETE
    
}
