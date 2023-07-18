<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePedidoRequest;
use App\Http\Resources\PedidoResource;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedido =  Pedido::all();
        return PedidoResource::collection($pedido);
    }

    public function mostrar()
    {
        $pedido = Pedido::find(1);
        /*
        ESTE NO SALEEEEEEE
        return response()->json($pedido->mesa->numero);
        */

        return response()->json($pedido);
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
    public function store(StoreUpdatePedidoRequest $request)
    {
        $data = $request->validated();
        $pedido = Pedido::create($data); 
        return new PedidoResource($pedido);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedidos)
    {
        //
    } 
    
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedidos)
    {
        //
    }
}
