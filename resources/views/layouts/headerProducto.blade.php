<!DOCTYPE html>
<html lang="en">

<body>
<div class="header">
    <section id="header" class="appear">

        <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300"line-height:50px;">RR Computer
                    </a></h1>

                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                        <li ><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#section-about" id = "resetear" >Resetear Pedido </a></li>
                         @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a  href="#section-about" id = "guardarPedido" >Guardar Pedido </a>
                                    {{ csrf_field() }}
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">

                                    @if (Auth::user()->isadmin())
                                    <li>
                                        <a href="{{ route('panelAdmin') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('panel-form').submit();">
                                            Panel de Administración
                                        </a>

                                        <form id="panel-form" action="{{ route('panelAdmin') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    <li>
                                        <a href="{{ route('panelPedidos') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('pedidos-form').submit();">
                                            Mis Pedidos
                                        </a>

                                        <form id="pedidos-form" action="{{ route('panelPedidos') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ route('panelPedidos') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('pedidos-form').submit();">
                                            Mis Pedidos
                                        </a>

                                        <form id="pedidos-form" action="{{ route('panelPedidos') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div><!--/.navbar-collapse -->

            </div>
    </section>
    </div>
</body>
