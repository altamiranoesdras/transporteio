@extends('layouts.app')

@section('title_page',__('Home'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('Metodo Transporte')}}</h1>
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

                    @include('layouts.partials.request_errors')


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
                                                <th>Demanda</th>
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
                                <button type="submit" name="" id="" class="btn btn-success">
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

                                @dump($resultado)


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

                origenes: [
                    {
                        nombre: 'Almacen 1',
                        oferta: 160000,
                    },
                    {
                        nombre: 'Almacen 2',
                        oferta: 120000,
                    },
                ],

                destinos: [
                    {
                        nombre: 'Cliente 1',
                        demanda: 80000,
                    },
                    {
                        nombre: 'Cliente 2',
                        demanda: 70000,
                    },
                    {
                        nombre: 'Cliente 3',
                        demanda: 90000,
                    }

                ],

                origenBlanco: {
                    nombre: '',
                    oferta: 0,
                },

                destinoBlanco: {
                    nombre: '',
                    demanda: 0,
                },

                precios: [
                    [3,4,6],
                    [5,3,5],
                ],



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
