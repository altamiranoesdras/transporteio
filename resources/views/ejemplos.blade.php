@extends('layouts.app')

@section('title_page',__('Ejemplos'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('Ejemplos')}}</h1>
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

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{asset('img/ejemplos/1.png')}}" class="card-img-top" alt="Imagen 3">
                                <div class="card-body">
                                    <h5 class="card-title">Ejemplo 1</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{asset('img/ejemplos/2.png')}}" class="card-img-top" alt="Imagen 3">
                                <div class="card-body">
                                    <h5 class="card-title">Ejemplo 2</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{asset('img/ejemplos/3.png')}}" class="card-img-top" alt="Imagen 3">
                                <div class="card-body">
                                    <h5 class="card-title">Ejemplo 3 </h5>
                                </div>
                            </div>
                        </div>

                            


                    </div>

                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>
@endsection

