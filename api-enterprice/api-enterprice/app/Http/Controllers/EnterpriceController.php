<?php

namespace App\Http\Controllers;

use App\Models\Enterprice;
use Illuminate\Http\Request;

class EnterpriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enterprices = Enterprice::all();
        return response()->json($enterprices);
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
    public function store(Request $request)
    {
        //Aqui algunas validaciones
        $validated = $request->validate([
            'name' => 'required|max:50',
            'address' => 'required',
            'code' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Enterprice $enterprice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enterprice $enterprice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enterprice $enterprice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enterprice $enterprice)
    {
        //
    }
}
