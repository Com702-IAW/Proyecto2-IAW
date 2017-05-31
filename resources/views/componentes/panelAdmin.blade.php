@extends('layouts.estilo')
@extends('layouts.headerAdmin')

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
 <body>

<section id="testimonials-4" class="section" data-stellar-background-ratio="0.5">
</section>

<div class="container">

    <section id="section-agregar" class="section" data-stellar-background-ratio="2">
        <h1> Agregar Componente </h1>

        <form action="{{ url('panelAdmin/store') }}" method="post" role="form" class="form-horizontal col-md-12" accept-charset="UTF-8" enctype="multipart/form-data">        
            <div class="form-group">
                <label for="tipo" class="col-md-6">Componente</label>
                <select name = "tipo" class="form-control">
                    <option value="0">Monitor</option>
                    <option value="1">Teclado</option> 
                    <option value="2">Mouse</option> 
                    <option value="3">Parlantes</option> 
                </select>
                {{ csrf_field() }}
            </div>

            <div class="form-group">
                <label for="marca" class="col-md-6">Marca</label>
                <input name="marca" placeholder="Ingresar Marca" class="form-control" required="required"></input>
                {{ csrf_field() }}
            </div>

            <div class="form-group">
                <label for="precio" class="col-md-6">Precio</label>
                <input type = "number" name="precio" placeholder="Ingresar Precio" class="form-control" required="required"></input>
                {{ csrf_field() }}
            </div>

            <div class="form-group">
                <label for="color" class="col-md-6">Color</label>
                <input name="color" placeholder="Ingresar Color" class="form-control" required="required"></input>
                {{ csrf_field() }}
            </div>

            <div class="form-group">
                <label for ="imagen"> Imagen </label> 
                <input name = "imagen" type = "file" />
                {{ csrf_field() }}
            </div>
 
            <div class="col-md-offset-4">
                <button type="submit" class="btn btn-primary" >
                    Agregar Componente
                </button>
            </div>
            
        </form>

    </section>

    <div class="col-md-12">
        <hr/>
    </div>

     <section id="section-eliminar" class="section col-md-12" data-stellar-background-ratio="2">
        <h1> Eliminar Componente </h1>

        <table class="table table-striped" id="tabla-eliminar">
                <thead>
                    <th>Tipo
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Color</th>
                </thead>
        </table>

        </form>

    </section>

 </div>

<section id="footer" class="section footer">
    <div class="container">
        <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row align-center copyright">
                <div class="col-sm-12">
                    <p>&copy; GREEN Theme</p>
                    <div class="credits">
                        <!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
                        -->
                        <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
        </div>
    </div>
    </section>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/controladorAdmin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>
