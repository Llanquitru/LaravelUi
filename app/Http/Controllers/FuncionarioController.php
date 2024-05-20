<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::with('user')->get();
       return view('funcionarios.index',compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$slug = Str::slug($request->oficina,'-');

       
        Funcionario::create([
           
            'nombre'=> $request -> nombre,
            'correo'=> $request -> correo,
            'departamento'=>$request-> departamento,
            'trabajo' =>$request-> trabajo,
            
            'user_id'=>Auth::user()->id



        ]);

        return redirect()->route('funcionario.alert');
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $slug = Str::slug($request->oficina,'-');
        $funcionario->update([
            'slug'=>$slug,
            'oficina'=> $request -> oficina,
            'equipo'=> $request -> equipo,
            'codigo'=>$request-> codigo,
            'requerimiento' =>$request-> requerimiento,
            'descripcion'=>$request-> descripcion,
           



        ]);
        return Redirect::route('funcionarios.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        //
    }

    public function tabla(){
        return view('funcionarios.tabla');
    }

    public function alert(){
        return view('funcionarios.alert');
    }
}
