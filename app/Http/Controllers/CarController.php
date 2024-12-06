<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Car::all();
        return view('cars.index', compact('clients'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $client_valid = $request->validate([
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|string|email|max:255|unique:clients',
            'phone'=> 'required|string|max:20'
        ]);

        Car::create($client_valid);
        return redirect()->route('cars.index')->with('success','Client bie ajouté!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Car::findOrFail($id);
        return view('cars.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCarRequest $request,$id)
    {
        $client_valid = $request->validate([
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|string|email|max:255|unique:clients,email,'.$id,
            'phone'=> 'required|string|max:20'
        ]);

        $client = Car::findOrFail($id);
        $client->update($client_valid);
        return redirect()->route('cars.index')->with('success','Client est bien mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Car::findOrFail($id);
        $client->delete();
        return redirect()->route('cars.index')->with('success_del','Client bie supprimé!');
    }
}
