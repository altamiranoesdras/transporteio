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

    <div class="content">
        <div class="container-fluid">
            <div class="clearfix"></div>



            <div class="clearfix"></div>
            <div class="card card-primary">
                <div class="card-body">


                     <!--            Contenido
                     ------------------------------------------------------------------------>
                    <form>
                        <div class="row">

                            <div class="form-group col-6">
                                <label for="almacen1demanda">Almacén 1 Demanda:</label>
                                <input type="number" class="form-control" id="almacen1demanda" name="almacen1demanda" placeholder="Ingrese la demanda del Almacén 1">
                            </div>
                            <div class="form-group col-6">
                                <label for="almacen2demanda">Almacén 2 Demanda:</label>
                                <input type="number" class="form-control" id="almacen2demanda" name="almacen2demanda" placeholder="Ingrese la demanda del Almacén 2">
                            </div>
                            <div class="form-group col-6">
                                <label for="almacen1produccion">Almacén 1 Producción:</label>
                                <input type="number" class="form-control" id="almacen1produccion" name="almacen1produccion" placeholder="Ingrese la producción del Almacén 1">
                            </div>
                            <div class="form-group col-6">
                                <label for="almacen2produccion">Almacén 2 Producción:</label>
                                <input type="number" class="form-control" id="almacen2produccion" name="almacen2produccion" placeholder="Ingrese la producción del Almacén 2">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>
@endsection

