@extends('template.app')

@section('content')
<div class=" container-fluid p-4">
    <div id="keanggotaan">
        <h3>Keanggotaan</h3>

        <div class="right pull-right">
            <input class="search" placeholder="Cari ...." type="text">
            <button class="btn btn-success"><i class="fa fa-plus"></i></button>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scpe="col"><input type="checkbox"></th>
                    <th></th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">NPM / ID</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr">
                    <td scope="row">1</td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img src="http://www.tokolokomedia.com/img_produk/60sistem-informasi-akademik-kampus-berbasis-web-dengan-laravel-5.jpg"
                            class="rounded mx-auto d-block" alt="gambar"></td>
                    <td>
                        10.14.19
                    </td>
                    <td>1702014</td>
                    <td>Rani Mulyani Kurniawan</td>
                    <td>
                        ranimulyanik14@gmail.com
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="tr">
                    <td scope="row">2</td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img src="https://www.duniailkom.com/wp-content/uploads/2017/12/MySQL-Uncover.jpg"
                            class="rounded mx-auto d-block" alt="gambar"></td>
                    <td>
                        10.14.19
                    </td>
                    <td>1702014</td>
                    <td>Rani Mulyani Kurniawan</td>
                    <td>
                        ranimulyanik14@gmail.com
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="tr">
                    <td scope="row">3</td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img src="https://www.duniailkom.com/wp-content/uploads/2016/03/cover_ebook_php_uncover.jpg"
                            class="rounded mx-auto d-block" alt="gambar"></td>
                    <td>
                        10.14.19
                    </td>
                    <td>1702014</td>
                    <td>Rani Mulyani Kurniawan</td>
                    <td>
                        ranimulyanik14@gmail.com
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-3"><a href="#"><i class="fa fa-print"></i></a>
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
