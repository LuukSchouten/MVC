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
    public function addAppointment(Request $request)
    {
        $afspraak = new afspraken;
        $afspraak->klant_id = $request->input('klant_id');
        $afspraak->paard_id = $request->input('paard_id');
        $afspraak->datum = $request->input('datum');
        $afspraak->save();
        return redirect('/afsprakenBeheer');
    }
    
    //READ
    public function overview()
    {
        //return view('afsprakenOverzicht') with ('afspraken', afspraken::all()); as $afspraak in afspraken::all()
        $afspraak = afspraken::all();
        return view('afsprakenOverzicht')->with('afspraak', $afspraak);
    }

    //UPDATE
    public function updateAppointment(Request $request, $id)
    {
        $afspraak = afspraken::findOrFail($id);
        $afspraak->klant_id = $request->input('klant_id');
        $afspraak->paard_id = $request->input('paard_id');
        $afspraak->datum = $request->input('datum');
        $afspraak->save();
        return redirect('/afsprakenBeheer');
    }

    //DELETE


}
