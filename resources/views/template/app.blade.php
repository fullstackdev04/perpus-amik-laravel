<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan STMIK AMIKBANDUNG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>

        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-panel border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading">
                        <h3>Smart Learning Library</h3>
                        <span>STMIK AMIKBANDUNG</span>
                    </div>
                    <div class="status">
                            <div class="d-flex pr-5 pl-4 justify-content-between align-items-center">
                                    <div class="image_outer_container">
                                        <div class="green_icon"></div>
                                        <div class="image_inner_container">
                                            <img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
                                        </div>
                                    </div>
        
                                    <div class="text">
                                            <h3>Suhendry</h3>
                                            <span>Pustakawan</span>
                                        </div>
                                </div>
        
                    </div>
                    <div class="list-group list-group-flush pt-4">
                        <a href="#" class="list-group-item list-group-item-action  active">Home</a>
                        <a href="#" class="list-group-item list-group-item-action ">Biliobigraphy</a>
                        <a href="#" class="list-group-item list-group-item-action ">Membership</a>
                        <a href="#" class="list-group-item list-group-item-action ">Reporting</a>
                        <a href="#" class="list-group-item list-group-item-action ">Circulation</a>
                    </div>
                </div>

                <div id="page-content-wrapper">

                        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                            <button class="btn btn-primary bg-white text-dark border-0" id="menu-toggle"><i class="fa fa-bars"></i></button>
                    
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-envelope-open"></i></a>
                                    </li>
                    
                                    <li class=" nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Profil
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#"><i class="fas fa-bell"></i></a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope-open"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i></a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-cog""></i></a>
                                        </li>
                                </ul>
                            </div>
                        </nav>

        <!-- /#sidebar-wrapper -->
        @yield('content')

    </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
