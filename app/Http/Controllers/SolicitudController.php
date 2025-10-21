<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
<<<<<<< HEAD
use GuzzleHttp\Client;
=======
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
<<<<<<< HEAD

=======
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function __construct()
    //  {
    //     return  $this->middleware('auth')->except('i');
    //  }
    public function index()
    {


    //    $elias = Auth::user()->id;

    $solicituds = Solicitud::with('user')->get();
return view('solicitudes.index', compact('solicituds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $slug = Str::slug($request->oficina,'-');

       
        Solicitud::create([
            'slug'=>$slug,
            'oficina'=> $request -> oficina,
            'equipo'=> $request -> equipo,
            'codigo'=>$request-> codigo,
            'requerimiento' =>$request-> requerimiento,
            'descripcion'=>$request-> descripcion,
<<<<<<< HEAD
            'user_id'=>Auth::user()->id
=======
            'id_user'=>Auth::user()->id
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660



        ]);

<<<<<<< HEAD
        return redirect()->route('solicitud.alert');
        }
=======

        return Redirect::route('solicitud.index');
    }
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660

    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitud)
    {
        return view('solicitudes.show', compact('solicitud'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
<<<<<<< HEAD
        return view('solicitudes.edit',compact('solicitud'));
=======
        return view('solicitudes.edit', compact('solicitud'));
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $slug = Str::slug($request->oficina,'-');
<<<<<<< HEAD
        $solicitud->update([
=======

       
       $solicitud-> update([
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
            'slug'=>$slug,
            'oficina'=> $request -> oficina,
            'equipo'=> $request -> equipo,
            'codigo'=>$request-> codigo,
            'requerimiento' =>$request-> requerimiento,
            'descripcion'=>$request-> descripcion,
<<<<<<< HEAD
           
=======
             'id_user'=>Auth::user()->id
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660



        ]);
<<<<<<< HEAD
        return Redirect::route('solicitud.index'); 
=======


        
        return Redirect::route('solicitud.index');
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
<<<<<<< HEAD
      // dd(true);
      $solicitud -> delete();
      return Redirect::back(); 
    }

    public function api(){
        $cliente = new Client();
        
       $response = $cliente->get('https://api.tutiempo.net/json/?lan=es&apid=zwDX4azaz4X4Xqs&ll=40.4178,-3.7022');
      dd($response);
    }

    public function alert(){

=======
        $solicitud -> delete();
       return Redirect::back(); 
    }

    public function alert(){
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
        return view('solicitudes.alert');
    }
}
