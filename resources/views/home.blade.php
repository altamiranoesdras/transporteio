@extends('layouts.app')

@section('titulo_pagina',__('Home'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('Home')}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">
                            <a class="btn btn-outline-success"
                               href="{!! route('admin.home') !!}">
                                <i class="fa fa-plus"></i>
                                <span class="d-none d-sm-inline">{{__('Home')}}</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content" id="root">
        <div class="container-fluid">

            @include('layouts.partials.request_errors')

            <div class="card card-primary">
                <div class="card-body">



                    <form action="{{ route('admin.home') }}" method="get" >


                        <div class="row">
                            <div class="col-sm-6">

                                <div class="card card-secondary card-solid" >
                                    <div class="card-header">
                                        <h3 class="card-title">Almacenes</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">


                                        <table class="table table-condensed table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Oferta</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-if="origenes == 0">
                                                <td colspan="5" class="text-center">Ningún origen agregado</td>
                                            </tr>
                                            <tr v-for="origen in origenes">
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" v-model="origen.nombre">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" v-model="origen.oferta">
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="tooltip" title="Eliminar" @click="eliminarOrigen(origen)" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="20" class="text-center">
                                                    <button type="button" class="btn btn-info" @click.prevent="nuevoOrigen()">
                                                        Agregar almacén
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- /.card-body -->
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="card card-secondary card-solid" >
                                    <div class="card-header">
                                        <h3 class="card-title">Clientes</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">


                                        <table class="table table-condensed table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Demanda</th>
                                                <th>Acción</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-if="destinos == 0">
                                                <td colspan="5" class="text-center">Ningún destino agregado</td>
                                            </tr>
                                            <tr v-for="destino in destinos">
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" v-model="destino.nombre">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" v-model="destino.demanda">
                                                </td>
                                                <td>
                                                    <button type="button" data-toggle="tooltip" title="Eliminar" @click="eliminarDestino(destino)" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="20" class="text-center">
                                                    <button type="button" class="btn btn-info" @click.prevent="nuevoDestino()">
                                                        Agregar cliente
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- /.card-body -->
                                </div>

                            </div>
                        </div>

                        <div class="card card-secondary card-solid">
                            <div class="card-header">
                                <h3 class="card-title">Precios</h3>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" >

                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>Almacen</th>
                                            <th v-for="destino in destinos" v-text="destino.nombre"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(origen,indexOrigen) in origenes">
                                            <td v-text="origen.nombre"></td>
                                            <td v-for="(destino,indexDestino) in destinos">
                                                <input type="text" class="form-control form-control-sm" v-model="precios[indexOrigen][indexDestino]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>


                        <input type="hidden" name="origenes" :value="JSON.stringify(origenes)">
                        <input type="hidden" name="destinos" :value="JSON.stringify(destinos)">
                        <input type="hidden" name="precios" :value="JSON.stringify(precios)">

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" name="procesar" value="1" id="" class="btn btn-success">
                                    Procesar <i class="fa fa-cog" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="card card-success card-solid">
                            <div class="card-header">
                                <h3 class="card-title">Resultado</h3>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" >


                                @if(request()->procesar)
                                    @if($resultado)
                                    <h3>
                                        <b class="text-success">Forma óptima de distribución</b>
                                    </h3>
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                        <tr>
                                            <th>Almacen</th>
                                            @foreach($destinos as $destino)
                                                <th>{{$destino->nombre}}</th>
                                            @endforeach
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($origenes as $indexOrigen => $origen)
                                                <tr>
                                                    <td>{{$origen->nombre}}</td>
                                                    @foreach($destinos as $indexDestino => $destino)
                                                        <td>{{$resultado[$indexOrigen][$indexDestino]}}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                    <br>

                                    <h3>
                                        Costo total transporte:

                                        <b class="text-success">Q {{nfp($total ?? 0)}}</b>
                                    </h3>
                                    @else

                                        <h3>
                                            <b class="text-danger">No se encontró solución</b>
                                        </h3>
                                    @endif
                                @endif

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection



@push('scripts')
    <script>

        $(function (){
            $('input[name="q"]').hide();
        })

        var vmPanelFunciones= new Vue({
            el: '#root',
            created: function() {
            },
            mounted() {
            },
            data: {

                origenes: @json($origenes ?? [['nombre' => 'Almacen 1', 'oferta' => 0]]),

                destinos: @json($destinos ?? [['nombre' => 'Cliente 1', 'demanda' => 0]]),

                origenBlanco: {
                    nombre: '',
                    oferta: 0,
                },

                destinoBlanco: {
                    nombre: '',
                    demanda: 0,
                },

                precios: @json($precios ?? [[0],[0]]),



            },
            methods: {

                nuevoOrigen(){
                    this.origenes.push(Object.assign({}, this.origenBlanco));
                    this.precios.push([]);
                },
                eliminarOrigen(origen) {

                    var index = this.origenes.indexOf(origen);
                    this.origenes.splice(index, 1);

                    this.precios.splice(index, 1);
                },
                nuevoDestino(){
                    this.destinos.push(Object.assign({}, this.destinoBlanco));
                    this.precios.forEach(function (item, index) {
                        item.push(0);
                    });
                },
                eliminarDestino(destino) {
                    var index = this.destinos.indexOf(destino);
                    this.destinos.splice(index, 1);
                    this.precios.forEach(function (item, index) {
                        item.splice(index, 1);
                    });
                },


            },
            computed: {


            },
        });


    </script>
@endpush
