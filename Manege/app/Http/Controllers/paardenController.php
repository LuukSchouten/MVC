<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\paarden;

class paardenController extends Controller
{
    /**
     * Sla een nieuwe klant op in de database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //CREATE
    public function addHorse(Request $request){

        paarden::create([
            'naam' => $request->naam,
            'schofthoogte' => $request->schofthoogte,
            'gebruik' => $request->gebruik,
            'lvh' =>$request->lvh
        ]);

        return redirect()->back();

    }

    //READ
    public function getHorse(){
        $horse = DB::table('paarden')->select('id','naam','schofthoogte', 'gebruik', 'lvh')->get();
    return view('afsprakenBeheer')->with('horses', $horse);
    }

    //UPDATE
    public function updateHorse(){

    }

    //DELETE
    public function deleteHorse(){

    }


}
