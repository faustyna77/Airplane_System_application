<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airplane;
use Illuminate\Support\Facades\DB;

class AirPlaneController extends Controller
{
    //



    public function index()
    {
        $airplanes=Airplane::all();

        return view('airplanes.index',compact('airplanes'));

    }


    public function create()
    {
        return view('airplanes.create');
    }


    public function store(Airplane $airplane,Request $request)
    {

        $airplane->producer=$request->producer;
        $airplane->type=$request->type;
        $airplane->save();
        return redirect()->route('airplanes.index');


    }


    public function destroy(Airplane $airplane)
    {


        $airplane->delete();
        return redirect()->route('airplanes.index');
    }

    public function edit(Airplane $airplane)
    {
        return view('airplanes.edit',['airplane'=>$airplane]);
    }


    public function update(Airplane $airplane,Request $request)
    {
        $airplane->producer=$request->producer;
        $airplane->type=$request->type;
        $airplane->save();
        return redirect()->route('airplanes.index');
        

    }

    public function getProducerByType(Request $request)
    {
        $type = $request->input('type');

        $producer = DB::select("SELECT get_producer_by_type(:type)", ['type' => $type]);
    
        return view('airplanes.producer', ['producer' => $producer[0]->get_producer_by_type, 'type' => $type]);
    }
    
}
