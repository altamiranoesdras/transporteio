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
                        <h2>NOSOTROS</h2>
                        <p>Lignum es una empresa familiar con sede en Guatemala, con más de 50 años de experiencia en la industria de productos forestales,
                         estamos integrados de forma vertical y cerramos el ciclo completo, desde la genética. </p>
                         <p>siembra y aprovechamiento, industria y carpintería, comercialización, diseño y construcción de casas, pérgolas, decks y otras 
                            edificaciones, con presencia en varios países de CA y Panamá</p>
                     </p>

                     <p>
                        <h3>MISIÓN</h3>
                        <p>Lograr nuestros objetivos por medio de esfuerzo, dedicación y un trabajo constante,
                             para ofrecer productos y servicios forestales excelentes que satisfagan las necesidades de 
                             nuestros clientes en el mercado, a través de un proceso sostenible con reforestación.</p>
                             <h4>VISIÓN</h4>
                             <p>Ser la empresa líder en Centroamérica de productos forestales sostenibles con el 
                                medio ambiente y con la sociedad.</p>
                     </p>
                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>
@endsection

