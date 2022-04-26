<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Klanten;

class KlantenController extends Controller
{
    /**
     * Sla een nieuwe klant op in de database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //CREATE
    public function createUser(Request $request){

        $data = $request->input();

        DB::table('klanten')->insert([
            'naam' => $data['naam'],
            'achternaam' => $data['achternaam'],
            'tel' => $data['tel'],
        ]);

        return redirect('/klantenOverzicht');
    }

    //READ
    public function overview(){
        $klant = Klanten::all();
        return view('klantenOverzicht')->with('klant', $klant);
    }
    
    //UPDATE

    

    //DELETE

    //make function that deletes user from database 
    public function deleteUser($id){
        $klant = Klanten::find($id);
        $klant->delete();
        return redirect()->back();
    }
}
