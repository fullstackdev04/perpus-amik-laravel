@extends('template.app')

@section('content')
<div class=" container-fluid p-4">
    <div id="bilio">
        <h3>Biliobigraphy</h3>

        <div class="right pull-right">
            <button class="btn btn-success"><i class="fa fa-plus"></i></button>
        </div>
        <table class="table table-striped table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scpe="col"><input type="checkbox"></th>
                    <th scope="col">Judul</th>
                    <th scope="col">ISBN/ISNN</th>
                    <th scope="col">Salinan</th>
                    <th scope="col">Perubahan Terakhir</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-4"><a class="text-white" href="#"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-4"><a href="#" class="text-white"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-4"><a class="text-white" href="#"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-4"><a href="#" class="text-white"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <div class="row">
                            <div class="col col-lg-4"><a class="text-white" href="#"><i class="fa fa-pencil"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="col col-lg-4"><a href="#" class="text-white"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->


@endsection
