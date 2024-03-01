<?php

namespace App\Http\Controllers;

use App\Models\Liver;
use Illuminate\Http\Request;

class LiverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Liver::all();
        return view('livres.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livres.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'title' =>'required',
            'price' =>'required']);
            Liver::create($request->all());
            return redirect()->route('livres.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Liver $liver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Liver $liver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Liver $liver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liver $liver)
    {
        //
    }
}
