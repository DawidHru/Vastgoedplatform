<?php

namespace App\Http\Controllers;

use App\Http\Requests\VastgoedRequest;
use App\Models\Vastgoed;
use Illuminate\Http\Request;

class VastgoedController extends Controller
{
    public function index()
    {
        $vastgoederen = Vastgoed::all();
        return view('vastgoed.index', compact('vastgoederen'));
    }

    public function create()
    {
        return view('vastgoed.create');
    }

    public function store(VastgoedRequest $request)
    {
        $vastgoed = new Vastgoed();
        $this->save($vastgoed, $request);
        
        return redirect()->route('vastgoed.index')->with('success', 'Vastgoed toegevoegd!');
    }

    public function show(Vastgoed $vastgoed)
    {
        $vastgoed = Vastgoed::findOrFail($vastgoed);
        return view('vastgoed.show', compact('vastgoed'));
    }

    public function edit(Vastgoed $vastgoed)
    {
        return view('vastgoed.edit', compact('vastgoed'));
    }

    public function update(VastgoedRequest $request, Vastgoed $vastgoed)
    {
        $vastgoed->update($request->validated());
        return redirect()->route('vastgoed.index')->with('success', 'Vastgoed bijgewerkt!');
    }
    

    public function destroy(Vastgoed $vastgoed)
    {
        $vastgoed->delete();
        return redirect()->route('vastgoed.index');
    }

    private function save($vastgoed, VastgoedRequest $request)
    {
        $vastgoed->titel = $request->titel;
        $vastgoed->omschrijving = $request->omschrijving;
        $vastgoed->type = $request->type;
        $vastgoed->prijs = $request->prijs;
        $vastgoed->locatie = $request->locatie;
        $vastgoed->save();
    }
}
