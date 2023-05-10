<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();
        return view('console.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('console.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $console = Console::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'logo' => $request->file('logo')->store('public/logos'),
            'description' => $request->description

            ]);
            return redirect(route('console.index'))->with('consoleCreated', 'Hai creato con successo la tua console');
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
        return view('console.show', compact('console'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        //
    }
}
