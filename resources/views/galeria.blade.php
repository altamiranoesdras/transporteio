@extends('layouts.app')

@section('titulo_pagina',__('Galería'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('Galería')}}</h1>
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

                     <div class="container">
        <h1>Galería de Imágenes</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/LOUVER.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">LOUVERS</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/logo.8.png')}}" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/descarga.2.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum_2.0</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/fachada_madera.3.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum_2.0</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/channels4_profile.1.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/page_1.10.webp')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/planta_madera.12.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/unnamed.13.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/fsa_lignum_01.5.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/images.6.jpeg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/MESA.jpeg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">MESA_CENTRO</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/MESA AZUL.jpeg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">MESA_ARMABLE</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/PERGOLA.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">PERGOLA</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/PUERTA COCINA.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">PUERTA</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/PUERTA.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">PUERTA_BLANCA</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/PUERTA CLOSET.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">PUERTA_CLOSET</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/CASETA.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">FICHA_CASETA</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/ENCINO.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">PARQUETON_ENCINO</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/LOUVERS.png')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">LOUVER</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/FACHALETA.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">FACHALETA_MADERA</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/VIVIENDA.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">VIVIENDA</h5>
                    </div>
                </div>
            </div>



        </div>
    </div>


            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/images_2.7.jpeg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/logo_lignum.9.jpg')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/page_1_thumb_large.11.webp')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Lignum</h5>
                    </div>
                </div>
            </div>
    <!-- Incluye las bibliotecas de Bootstrap JavaScript (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>
@endsection

