@extends('template.app')

@section('content')
<div class=" container-fluid p-4">
    <div id="bilio">
        <h3>Eksemplar Keluar</h3>

        <div class="right pull-right">
            <input class="search" placeholder="Cari ...." type="text">
            <button class="btn btn-success"><i class="fa fa-plus"></i></button>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scpe="col"><input type="checkbox"></th>
                    <th scope="col">Kode Eksemplar</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr">
                    <td scope="row">1</td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>SAP002</td>
                    <td>10.14.19</td>
                    <td>
                        <h4>PANDUAN SAKTI MENGUASAI LARAVEL5</h4>
                        <span>Nuris Akbar,S.ST</span>
                    </td>

                    <td>
                        <h4>16-MARET-2019</h4>
                        <span>13:16:52</span>
                    </td>
                    <td>
                        <h4>23-MARET-2019</h4>
                        <span>13:16:52</span>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-4"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-4"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="tr">
                    <td scope="row">1</td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>SAP002</td>
                    <td>10.14.19</td>
                    <td>
                        <h4>PANDUAN SAKTI MENGUASAI LARAVEL5</h4>
                        <span>Nuris Akbar,S.ST</span>
                    </td>

                    <td>
                        <h4>16-MARET-2019</h4>
                        <span>13:16:52</span>
                    </td>
                    <td>
                        <h4>23-MARET-2019</h4>
                        <span>13:16:52</span>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-4"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-4"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="tr">
                    <td scope="row">1</td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>SAP002</td>
                    <td>10.14.19</td>
                    <td>
                        <h4>PANDUAN SAKTI MENGUASAI LARAVEL5</h4>
                        <span>Nuris Akbar,S.ST</span>
                    </td>

                    <td>
                        <h4>16-MARET-2019</h4>
                        <span>13:16:52</span>
                    </td>
                    <td>
                        <h4>23-MARET-2019</h4>
                        <span>13:16:52</span>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-4"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-4"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagination-wrapper">
            <div class="pagination">
                <a class="prev page-numbers" href="javascript:;"><i class="fa fa-chevron-left"></i></a>
                <span aria-current="page" class="page-numbers current">1</span>
                <a class="page-numbers" href="javascript:;">2</a>
                <a class="page-numbers" href="javascript:;">3</a>
                <a class="page-numbers" href="javascript:;">4</a>
                <a class="next page-numbers" href="javascript:;"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->


@endsection
