<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateMesaRequest;
use App\Http\Resources\MesaResource;
use App\Models\Mesa;
use Illuminate\Http\Request;


class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $mesa =  Mesa::paginate();
        return MesaResource::collection($mesa);
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
    public function store(StoreUpdateMesaRequest $request)
    {
        $data = $request->validated();
        $mesa = Mesa::create($data); 
        return new MesaResource($mesa);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        //
    }
}
