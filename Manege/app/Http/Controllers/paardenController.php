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
    
    //create addhorse function
    public function addhorse(Request $request)
    {
        //validate the data
        $this->validate($request, [
            'naam' => 'required|max:255',
            'schofthoogte' => 'required|max:255',
            'gebruik' => 'required|max:255',
            'lvh' => 'required|max:255',
        ]);

        //store in the database
        $horse = new paarden;
        $horse->naam = $request->naam;
        $horse->schofthoogte = $request->schofthoogte;
        $horse->gebruik = $request->gebruik;
        $horse->lvh = $request->lvh;
        $horse->save();

        //redirect to another page
        return redirect('/paardenOverzicht');
    }

    //READ
    public function getHorse(){
        $horse = DB::table('paarden')->select('id','naam','schofthoogte', 'gebruik', 'lvh')->get();
        return view('afsprakenBeheer')->with('horses', $horse);
    }

    //make overview function
    public function overview(){
        $paard = Paarden::all();
        return view('paardenOverzicht')->with('paard', $paard);
    }

    //UPDATE
    public function updateHorse(){

    }

    //DELETE
    public function deleteHorse(){

    }


}
