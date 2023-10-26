@extends('layouts.app')

@section('title_page',__('Información'))

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('Información')}}</h1>
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
                     <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;color:black;">Universidad Mariano G&aacute;lvez de Guatemala</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;color:black;">Ingenier&iacute;a en Sistemas</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;color:black;">Investigaci&oacute;n de Operaciones</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;color:black;">Ingeniero Richard Ortiz</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;">&nbsp;</span></p>
                <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:12.0pt;margin-left:0cm;text-align:center;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;color:black;">&nbsp;</span></p>
                <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:12.0pt;margin-left:70.8pt;text-align:center;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><strong><span style="line-height:150%;color:black;"><br>&nbsp;<br>&nbsp;<br>&nbsp;Investigaci&oacute;n sobre Redes de transporte y Utilidad optimizaci&oacute;n de Inventarios</span></strong></p>
                <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:12.0pt;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><strong><span style="line-height:150%;color:black;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Esdras Guillermo Altamirano Campos<br>&nbsp;1890-07-18554</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Dulce Mar&iacute;a Car&iacute;as Bran</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>1980-19-10478</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Kevin Ad&aacute;n Fernando Palencia estrada&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>1890-21-10659</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Angely Dulce Maria Guevara Hern&aacute;ndez&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>1890-21-6340</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Roberto Carlos Chinchilla Revolorio&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>1890-21-8790</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&Aacute;lvaro Giovanni Ru&iacute;z Valle&nbsp;<br>&nbsp;1890-21-5482</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Antony Jeovanny Casta&ntilde;eda r&iacute;os&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>1890-17-15352</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Marvin Alejandro Estrada Estrada&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>1890-21-14281</span></p>
                <p><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><br>&nbsp;</span></p>


                </div>
            </div>

            <div class="card">
                <div class="card-body">

                <h1 style='margin-top:12.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;text-align:center;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;">Introducci&oacute;n</span></h1>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;text-align:justify;font-size:12.0pt;font-family:"Times New Roman",serif;line-height:150%;'><span style="line-height:150%;">Las redes de transporte desempe&ntilde;an un papel fundamental en la econom&iacute;a global y la vida cotidiana. Estas redes abarcan una amplia variedad de modos de transporte, que incluyen carreteras, ferrocarriles, aeropuertos, puertos mar&iacute;timos y v&iacute;as fluviales, y se utilizan para mover personas, mercanc&iacute;as y recursos en todo el mundo. La eficiencia y la gesti&oacute;n efectiva de estas redes son esenciales para garantizar un flujo constante y seguro de bienes y personas.</span></p>

                </div>
            </div>


            <div class="text-center">

            </div>
        </div>
    </div>
@endsection

