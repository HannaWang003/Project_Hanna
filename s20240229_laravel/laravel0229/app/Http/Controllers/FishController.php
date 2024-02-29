<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('fish.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fish.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('fish.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
