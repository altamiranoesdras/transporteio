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

        $datos = $this->datosArrray($request);

        $origenes = json_decode($request->origenes) ?? [];
        $destinos = json_decode($request->destinos) ?? [];
        $precios = json_decode($request->precios) ?? [];



        $resultado = $this->transporteCostoMinimo($datos['origenes'], $datos['destinos'], $datos['precios']);

        $total = $this->sumaAsignaciones($resultado, $datos['precios']);

        return view('home',compact('resultado','origenes','destinos','precios','total'));
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

    public function datosArrray(Request $request)
    {

        $origenes = json_decode($request->origenes) ?? [];
        $destinos = json_decode($request->destinos) ?? [];
        $precios = json_decode($request->precios) ?? [];

        $origenes = collect($origenes)->map(function ($item) {
            return $item->oferta;
        })->toArray();

        $destinos = collect($destinos)->map(function ($item) {
            return $item->demanda;
        })->toArray();




        return [
            'origenes' => $origenes,
            'destinos' => $destinos,
            'precios' => $precios
        ];
    }


    function transporteCostoMinimo($oferta, $demanda, $costos) {
        $m = count($oferta);
        $n = count($demanda);

        // Inicializar variables
        $asignacion = array_fill(0, $m, array_fill(0, $n, 0));
        $fila = array_fill(0, $m, false);
        $columna = array_fill(0, $n, false);

        // Bucle principal
        while (true) {
            $minimo = INF;
            $minFila = -1;
            $minColumna = -1;

            // Encontrar la celda con el costo mínimo
            for ($i = 0; $i < $m; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    if (!$fila[$i] && !$columna[$j] && $costos[$i][$j] < $minimo) {
                        $minimo = $costos[$i][$j];
                        $minFila = $i;
                        $minColumna = $j;
                    }
                }
            }

            // Si no se encuentra una celda con costo mínimo, terminar
            if ($minFila == -1) {
                break;
            }

            // Asignar la mayor cantidad posible a la celda
            $cantidad = min($oferta[$minFila], $demanda[$minColumna]);
            $asignacion[$minFila][$minColumna] = $cantidad;

            // Actualizar oferta y demanda
            $oferta[$minFila] -= $cantidad;
            $demanda[$minColumna] -= $cantidad;

            // Marcar fila y columna
            if ($oferta[$minFila] == 0) {
                $fila[$minFila] = true;
            }
            if ($demanda[$minColumna] == 0) {
                $columna[$minColumna] = true;
            }
        }

        return $asignacion;
    }

    //suma asignaciones
    function sumaAsignaciones($asignacion, $costos) {
        $suma = 0;
        for ($i = 0; $i < count($asignacion); $i++) {
            for ($j = 0; $j < count($asignacion[$i]); $j++) {
                $suma += $asignacion[$i][$j] * $costos[$i][$j];
            }
        }
        return $suma;
    }



}
