<!doctype html>
<html lang="en">
<head>
    <title>Quickmark</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1bb9241288.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-32x32.png">

    <!-- Material Kit CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="black">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text logo-normal text-center font-weight-bold">
                Quickmark
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                @if(Auth::user()->is_admin)
                <li>
                    <a href="#administration" data-toggle="collapse" aria-expanded="false" class="collapsed">
                        <i class="fas fa-user-shield"></i>
                        <p>
                            Administration
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="administration">
                        <ul class="nav">
                            <li><a href="{{ route('add-prof') }}" class="navi-link">Ajouter un professeur</a></li>
                            <li><a href="{{ route('add-eleve') }}" class="navi-link">Ajouter un élève</a></li>
                            <li><a href="{{ route('add-matiere') }}" class="navi-link">Ajouter une matière</a></li>
                            <li><a href="{{ route('add-entreprise') }}" class="navi-link">Ajouter une entreprise</a></li>
                        </ul>
                    </div>
                </li>
                @endif
                <li class="{{ request()->path() === 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-school"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ request()->path() === 'liste-eleves' ? 'active' : '' }}">
                    <a href="{{ route('liste-eleves') }}" class="navi-link">
                        <i class="fas fa-list-ul"></i>
                        <p>Élèves</p>
                    </a>
                </li>
                <li class="{{ request()->path() === 'liste-matieres' ? 'active' : '' }}">
                    <a href="{{ route('liste-matieres') }}" class="navi-link">
                        <i class="fas fa-book-reader"></i>
                        <p>Matières</p>
                    </a>
                </li>
                <li class="{{ request()->path() === 'liste-entreprises' ? 'active' : '' }}">
                    <a href="{{ route('liste-entreprises') }}" class="navi-link">
                        <i class="fas fa-industry"></i>
                        <p>Entreprises</p>
                    </a>
                </li>
                <li class="{{ request()->path() === 'liste-stages' ? 'active' : '' }}">
                    <a href="{{ route('liste-stages') }} " class="navi-link">
                        <i class="fas fa-business-time"></i>
                        <p>Stages</p>
                    </a>
                </li>
                <li class="{{ request()->path() === 'gerer-notes' ? 'active' : '' }}">
                    <a href="{{ route('gestion-notes') }}" class="navi-link">
                        <i class="fas fa-pen-alt"></i>
                        <p>Gérer les notes</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="nc-icon nc-single-02"></i>
                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Se déconnecter</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="panel-header panel-header-sm">
        </div>
        @if(session('success_message'))
            <div class="alert alert-message">
                {{ session('success_message') }}
            </div>
        @endif
        @yield('content')
        <footer class="footer">
            <div class="copyright">
                &copy; <script>document.write(new Date().getFullYear())</script> QuickMark, tous droits réservés
            </div>
        </footer>
    </div>
</div>

@include('sweetalert::alert')
</body>
<!--   Core JS Files   -->
<script src="/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/js/core/popper.min.js" type="text/javascript"></script>
<script src="/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/js/plugins/moment.min.js"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/js/plugins/bootstrap-switch.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="/js/plugins/jquery.dataTables.min.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Chart JS -->
<script src="/js/plugins/chartjs.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/js/plugins/bootstrap-notify.js"></script>

<!-- Control Center for Paper Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/js/paper-dashboard.js?v=2.0.0" type="text/javascript"></script>
</html>
