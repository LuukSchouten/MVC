<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\klanten;

class manegeController extends Controller
{
    /**
     * Sla een nieuwe klant op in de database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertCustomerData(Request $request){

        $klant = klanten::create([
            'naam' => $request->naam,
            'achternaam' => $request->achternaam,
            'tel' => $request->tel,
            'paard_id' =>$request->paard_id
        ]);

        return redirect()->back();


    }
}
