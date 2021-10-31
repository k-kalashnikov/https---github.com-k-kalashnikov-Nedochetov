<?php

namespace App\Http\Controllers;

use App\Models\Herb;
use Illuminate\Http\Request;

class HerbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Herb::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function query(Request $request)
    {
        $description = $request['description'];
        $herbs = Herb::where('description', 'like', '%'.$description.'%')
            ->get();

        $result = array();
        foreach ($herbs as $valueH) {

            $medicaments = $valueH->medicaments()->get();

            foreach ($medicaments as $valueM) {
                $result[$valueM->id] = $valueM;
            } 
        }
        return $result;
    }
}
