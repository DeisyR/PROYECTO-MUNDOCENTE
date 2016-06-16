@extends('layouts.default')

<link rel="stylesheet" href="css/bootstrap.css">
<title> Mundocente</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/galeria.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<script  src="js/jquery.min.js"></script>
<script  src="js/bootstrap.js"></script>

@section('content')

        <!--Route::resource('task','PlaceController/'64'/create');-->
    <h1>Registro de AREAS</h1>
    <br>

    @foreach($listareas as $area)

        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG" class="panel-image-preview" />
                    <label for="toggle-{{$area->id_area}}"></label>
                </div>
                <input type="checkbox" id="toggle-{{$area->id_area}}" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>{{$area->id_area}}</h4>
                    <p>{{$area->name_area}}    <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
        </div>
    @endforeach




            <!--Seccion Show
        <section class="main container">
            <div class="row">
                <section class="post col-md-20">
                    <div class="miga-de-pan">
                        <ol class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li class="active">convocatoria</li>
                        </ol>
                    </div>
                </section>
            </div>

        </section>

        <div class="container" style="margin-top:10px;">
            <div class="row form-group">
                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG" class="panel-image-preview" />
                            <label for="toggle-1"></label>
                        </div>
                        <input type="checkbox" id="toggle-1" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Title of Image</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image hide-panel-body">
                            <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cf9489095e8_1.JPG" class="panel-image-preview" />
                            <label for="toggle-2"></label>
                        </div>
                        <input type="checkbox" id="toggle-2" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Title of Image</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">You can even have a Panel Title</h3>
                        </div>
                        <div class="panel-image hide-panel-body">
                            <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="panel-image-preview" />
                            <label for="toggle-3"></label>
                        </div>
                        <input type="checkbox" id="toggle-3" class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Title of Image</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="#facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cd36aac6bed_1.JPG" class="panel-image-preview" />
                            <label for="toggle-4"></label>
                        </div>
                        <input type="checkbox" id="toggle-4" checked class="panel-image-toggle">
                        <div class="panel-body">
                            <h4>Show the Description by default!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                            <a href="www.facebook.com"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div-->

@stop