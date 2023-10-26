<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


        $resultado = $this->procesarDatos($request);



        return view('home',compact('resultado'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('admin.users.profile');
    }

    public function contact()
    {
        return view('admin.contact');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function ayuda()
    {
        return view('ayuda');
    }

    public function informacion()
    {
        return view('informacion');
    }

    public function ejemplos()
    {
        return view('ejemplos');
    }

    public function galeria()
    {
        return view('galeria');
    }

    public function unificarDatos(Request $request)
    {

        $res = collect();


        $origenes = json_decode($request->origenes) ?? [];
        $destinos = json_decode($request->destinos) ?? [];
        $precios = json_decode($request->precios) ?? [];

//        dd($origenes, $destinos, $precios);


        foreach ($origenes as $index => $origene) {

            foreach ($destinos as $indexDestino => $destino) {

                $res->push([
                    'origen' => $origene->nombre,
                    'destino' => $destino->nombre,
                    'oferta' => $origene->oferta,
                    'demanda' => $destino->demanda,
                    'precio' => $precios[$index][$indexDestino] ?? 0
                ]);
            }
        }

        return $res->toArray();

    }

    public function procesarDatos(Request $request)
    {
        $datos = $this->unificarDatos($request);


        //aqui se debe realizar el algoritmo para mostrar resultado


        return $datos;
    }
}
