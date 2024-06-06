<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adres;
use Illuminate\Support\Facades\DB;
class AdresController extends Controller
{
    //
public function index()
{


    $adresy = Adres::all();
    return view('adres.index', compact('adresy'));
}

public function destroy(Adres $adres)
{
    $adres->delete();
    return redirect()->route("adres.index");

}
public function create()
    {
        return view('adres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Adres::create($input);

        return redirect()->route('adres.index');
    }

    


    public function show(Adres $adres)
    {
        return view('adres.show', [
            'adres' => $adres
        ]);
    }

    
    

    // Metoda index i inne metody...

    public function edit(Adres $adres)
    {
        return view('adres.edit', ['adres' => $adres]);
    }

    public function update(Adres $adres,Request $request)
    {
        $adres->wojewodztwo=$request->wojewodztwo;
        $adres->powiat=$request->powiat;
        $adres->miejscowosc=$request->miejscowosc;
        $adres->ulica=$request->ulica;
        $adres->numer_domu=$request->numer_domu;
        $adres->numer_lokalu=$request->numer_lokalu;
        
         $adres->save();
        return redirect()->route('adres.index');
    }



    public function getAllAddresses()
    {
        $addresses = DB::select('SELECT * FROM get_all_addresses()');
        return view('adres.adreses', ['addresses' => $addresses]);
    }
}


    

