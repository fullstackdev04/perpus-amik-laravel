@extends('template.app')

@section('content')
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-4">
        <div class="panel">
            <div class="row">
                <div class="col col-lg-3">
                    <div class="card shadow-card">
                        <div class="card-body">
                            <h5 class="card-title">318</h5>
                            <p class="card-text">Jumlah Anggota</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3">
                    <div class="card shadow-card">
                        <div class="card-body">
                            <h5 class="card-title">902</h5>
                            <p class="card-text">Jumlah Buku</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3">
                    <div class="card shadow-card">
                        <div class="card-body">
                            <h5 class="card-title">448</h5>
                            <p class="card-text">Ebook</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3">
                    <div class="card shadow-card">
                        <div class="card-body">
                            <h5 class="card-title">23</h5>
                            <p class="card-text">Pengunjung Hari Ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-lg-8">
                <h3 class="mt-5 mb-4">Peminjaman Buku</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="col col-lg-4 mt-5">
                <div class="calendars">
                    <div class="wrapper">
                        <div id="calendarContainer"></div>
                        <div id="organizerContainer" style="margin-left: 8px;"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
@endsection
