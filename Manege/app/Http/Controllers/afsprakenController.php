<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\afspraken;

class afsprakenController extends Controller
{
    /**
     * Sla een nieuwe klant op in de database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //CREATE
    public function createAfspraak(Request $request){
                //TODO: POST DATA TO DATABASE HERE, MAKE OVERVIEW OF RESERVATIONS, USERS AND HORSES.
                $data = $request->input();
                $eind_tijd = date('Y-m-d H:i', strtotime('+1 hour', strtotime($data['datum'])));
                
                DB::table('klanten')->insert([
                    'naam' => $data['naam'],
                    'achternaam' => $data['achternaam'],
                    'tel' => $data['tel'],
                    'paard_id' => $data['ras'],
                ]);
            
                DB::table('reserveringen')->insert([
                    'datum' => $data['datum'],
                    'start_tijd' => $data['datum'],
                    'eind_tijd' => $eind_tijd,
                    'ras' => $data['ras'],
                    // 'klant' => $klant_id,
                ]);

                dd($klant_id[0]);

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
