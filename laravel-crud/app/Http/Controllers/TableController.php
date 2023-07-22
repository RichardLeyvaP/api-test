<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function store(Request $request)
    {
        //Aqui algunas validaciones
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }


    public function show()
    {
        // $tables = Table::with('orders')->first();
         $tables = DB::table('Tables')
         ->join('orders', 'orders.table_id', '=', 'tables.id')         
          ->pluck('name','total');
        // ->get();

        return response()->json($tables);
    }
    public function show2()
    {
        // $tables = Table::with('orders')->first();
        $tables = Table::with('orders')
                       ->join('orders','orders.table_id','=','tables.id')
                       ->whereBetween('total', [1,100])
                       ->pluck('total','name')
                       ->toJson();

        return $tables;
    }
    public function show3()
    {
         $tables = (string) Table::with('orders')->get();
       return $tables;
    }
    
    
    public function intervalo()
    { //aqui seleciona de 2 tablas donde el id coincide
      // donde el total de la primera tabla no esta entre 1 y 100
      // y solo devuelve el total y el nombre
      //devolucion en json
         $tables = DB::table('orders')                             
                    ->whereNotBetween('total', [1, 100])
                    ->join('tables','tables.id','=','orders.table_id')
                    ->pluck('total','name')
                    ->toJson();
       

         return $tables;
    }

    public function dentistas(string $id)
    {
        if($id == 'usuarios')
        $tables = DB::table('usuarios')->get()->toJson(); 
        else if($id == 'procedimentos')
        $tables = DB::table('procedimentos')->get()->toJson();
        else if($id == 'especialidades')
        $tables = DB::table('especialidades')->get()->toJson();
        else if($id == 'espec-proced')
        {
            $tables = DB::table('procedimentos')   
            ->join('especialidades','especialidades.id_especialidade','=','procedimentos.id_especialidade')
            ->pluck('descricao','codigo_interno')
            ->toJson();
        }
        //everson.bigaton@hotmail.com



       return $tables;

    }
    
}
