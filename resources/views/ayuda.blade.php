@extends('layouts.app')

@section('title_page',__('Ayuda'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('Ayuda')}}</h1>
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
                     <p>
                        <h1>Datos De la Empresa</h1>
                        <p>Con más de 50 años, hemos evolucionado  
                        la manera de ofrecer y fabricar productos en madera tratada de alta calidad.</p>
                        <h2></h2>
                     </p>
                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>
@endsection

