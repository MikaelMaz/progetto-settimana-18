<?php

namespace App\Http\Controllers;

use App\Models\Prenotazioni;
use App\Http\Requests\StorePrenotazioniRequest;
use App\Http\Requests\UpdatePrenotazioniRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PrenotazioniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
    
        if ($user->is_admin == 1) {
            $prenotazioni = Prenotazioni::with('corsi')->with('user')->get();
        } else {
            $prenotazioni = Prenotazioni::where('users_id', $user->id)->with('corsi')->with('user')->get();
        }
    
        return view('prenotazioni', ['prenotazioni' => $prenotazioni, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrenotazioniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrenotazioniRequest $request, Prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenotazioni $prenotazioni)
    {
        //
    }
}
