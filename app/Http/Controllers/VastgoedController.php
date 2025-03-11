<?php

namespace App\Http\Controllers;

use App\Models\Vastgoed;
use Illuminate\Http\Request;

class VastgoedController extends Controller
{
    public function index()
    {
        $vastgoed = Vastgoed::all();
        return view('vastgoed.index', compact('vastgoed'));
    }

    public function create()
    {
        return view('vastgoed.create');
    }

    public function store(Request $request)
    {
        Vastgoed::create($request->validate([
            'titel' => 'required',
            'omschrijving' => 'required',
            'type' => 'required',
            'prijs' => 'required',
            'locatie' => 'required',
        ]));

        return redirect()->route('vastgoed.index')->with('success', 'Vastgoed toegevoegd!');
    }

    public function show(Vastgoed $vastgoed)
    {
        return view('vastgoed.show', compact('vastgoed'));
    }

    public function edit(Vastgoed $vastgoed)
    {
        return view('vastgoed.edit', compact('vastgoed'));
    }

    public function update(Request $request, Vastgoed $vastgoed)
    {
        $vastgoed->update($request->validate([
            'titel' => 'required',
            'omschrijving' => 'required',
            'type' => 'required',
            'prijs' => 'required',
            'locatie' => 'required',
        ]));

        return redirect()->route('vastgoed.index')->with('success', 'Vastgoed bijgewerkt!');
    }

    public function destroy(Vastgoed $vastgoed)
    {
        $vastgoed->delete();
        return redirect()->route('vastgoed.index')->with('success', 'Vastgoed verwijderd!');
    }
}
