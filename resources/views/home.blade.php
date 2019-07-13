@extends('template.app')

@section('content')

    <div class=" container-fluid p-4">
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
                                                <th scope="col">Nama Anggota</th>
                                                <th scope="col">Kode Anggota</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Jam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Rabu</td>
                                                <td>10 / 11 / 2019</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Rabu</td>
                                                <td>10 / 11 / 2019</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Rabu</td>
                                                <td>10 / 11 / 2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="col col-lg-4 mt-5">
                                    {{-- <div class="calendars">
                    <div class="wrapper">
                        <div id="calendarContainer"></div>
                        <div id="organizerContainer" style="margin-left: 8px;"></div>
                    </div>
                </div> --}}
                                </div>
                            </div>

        </div>
</div>
<!-- /#page-content-wrapper -->
@endsection
