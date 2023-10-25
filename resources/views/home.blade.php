@extends('layouts.app')

@section('title_page',__('Home'))

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

            <div class="card card-primary">
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12 mb-1">

                            @include('layouts.partials.request_errors')


                            <form action="{{ url()->current() }}" method="get" >


                                <div class="card card-secondary card-solid" id="panel_origenes_destinos">
                                    <div class="card-header">
                                        <h3 class="card-title">Origenes</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">



                                        <div class="card card-secondary card-solid" v-for="origen in origenes">
                                            <!-- /.card-header -->
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-sm-8">

                                                        <table class="table table-condensed table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td>Nombre:</td>
                                                                <td>
                                                                    <input type="text" class="form-control form-control-sm" v-model="origen.nombre">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oferta:</td>
                                                                <td>
                                                                    <input type="text" class="form-control form-control-sm" v-model="origen.oferta">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>



                                                    </div>
                                                    <div class="col-sm-4 text-right">

                                                        <button type="button" name="" @click="eliminarOrigen(origen)" class="btn btn-danger btn-sm" style="margin-right: 1rem">
                                                            <i class="fa fa-trash"></i> Eliminar
                                                        </button>
                                                    </div>
                                                </div>


                                                <span>destinos</span>
                                                <table class="table table-condensed table-hover table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Demanda</th>
                                                        <th>Precio</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr v-if="origen.destinos == 0">
                                                        <td colspan="5" class="text-center">Ningún destino agregado</td>
                                                    </tr>
                                                    <tr v-for="destino in origen.destinos">
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" v-model="destino.nombre">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" v-model="destino.precio">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" v-model="destino.demanda">
                                                        </td>
                                                        <td>
                                                            <button type="button" data-toggle="tooltip" title="Eliminar" @click="eliminarDestino(origen,destino)" class="btn btn-danger btn-xs">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="20" class="text-center">
                                                            <button type="button" class="btn btn-info" @click.prevent="nuevoDestino(origen)">
                                                                Agregar destino
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>


                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info " data-toggle="modal" @click="nuevoOrigen()">
                                            Agregar origen
                                        </button>

                                    </div>
                                    <!-- /.card-body -->
                                </div>


                                <div class="card shadow-none bg-transparent border-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Resultado</h3>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" >



                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </form>

                        </div>
                        <!-- /.col-md-6 -->



                    </div>

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

                origenes: [
                    {
                        id: 1,
                        nombre: 'Origen 1',
                        oferta: 0,
                        destinos: [
                            {
                                id: 1,
                                nombre: 'Destino 1',
                                demanda: 100,
                                precio: 100,
                            },
                            {
                                id: 2,
                                nombre: 'Destino 2',
                                demanda: 100,
                                precio: 100,
                            },
                        ]
                    },
                ],

                origenBlanco: {
                    id: 0,
                    nombre: '',
                    oferta: 0,
                    destinos: [
                        {
                            id: 0,
                            nombre: '',
                            demanda: 0,
                            precio: 0,
                        },
                    ]
                },
                destinoBlanco: {
                    id: 0,
                    nombre: '',
                    demanda: 0,
                    precio: 0,
                },



            },
            methods: {


                nuevoOrigen(){
                    this.origenes.push(Object.assign({}, this.origenBlanco));
                },


                eliminarOrigen(origen) {

                    var index = this.origenes.indexOf(origen);
                    this.origenes.splice(index, 1);
                },


                nuevoDestino(origen){
                    origen.destinos.push(Object.assign({}, this.destinoBlanco));
                },


                eliminarDestino(origen,destino) {
                    var index = origen.destinos.indexOf(destino);
                    origen.destinos.splice(index, 1);
                },


            },
            computed: {


            },
        });


    </script>
@endpush
