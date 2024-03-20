<?php

namespace App\Http\Controllers;

use App\Models\Corsi;
use App\Http\Requests\StoreCorsiRequest;
use App\Http\Requests\UpdateCorsiRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CorsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if (Auth::check()) {
        $corsi = Corsi::all();
        return view('corsi', ['corsi' => $corsi], ['user' => $user]);} 
        else {
        return redirect()->route('login');
        }

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
    public function store(StoreCorsiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Corsi $corsi)
    {
        $user = Auth::user();
        return view('dettaglio', ['corsi' => $corsi], ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Corsi $corsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorsiRequest $request, Corsi $corsi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Corsi $corsi)
    {
        //
    }
}
