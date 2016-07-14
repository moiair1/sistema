<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}


</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!!URL::to('/')!!}">Administracion</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     @if(Auth::user()->id == 1)  
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Gastos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/gastos/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/gastos')!!}"><i class='fa fa-list-ol fa-fw'></i> Gastos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Conceptos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                        <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Centro de Costo<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/centroCosto/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/centroCosto')!!}"><i class='fa fa-list-ol fa-fw'></i> Centro de Costo</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Descripcion<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/descripcion/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/descripcion')!!}"><i class='fa fa-list-ol fa-fw'></i> Descripcion</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Documento<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/documento/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/documento')!!}"><i class='fa fa-list-ol fa-fw'></i> Documento</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Funcion<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/funcion/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/funcionmedioPagonaturalezaorigen')!!}"><i class='fa fa-list-ol fa-fw'></i> Funcion</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Funcionario<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/funcionario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/funcionario')!!}"><i class='fa fa-list-ol fa-fw'></i> Funcionario</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Medio de Pago<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/medioPagonaturalezaorigen/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/medioPagonaturalezaorigen')!!}"><i class='fa fa-list-ol fa-fw'></i> Medio de Pago</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Naturaleza<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/naturalezaorigen/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/naturalezaorigen')!!}"><i class='fa fa-list-ol fa-fw'></i> Naturaleza</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-child fa-fw"></i> Origen<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{!!URL::to('/origen/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                        </li>
                                        <li>
                                            <a href="{!!URL::to('/origen')!!}"><i class='fa fa-list-ol fa-fw'></i> Origen</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                      @if(Auth::user()->id == 1)  
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Filtros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                        

                         

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

    @section('scripts')
    @show


</body>

</html>
