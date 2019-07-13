@extends('template.app')

@section('content')
<div class=" container-fluid p-4">
    <div id="form-bilio">
        <h3 class="mb-4">Tambah Biliobigraphy</h3>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Masukkan judul buku lengkap">
                    </div>

                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" placeholder="Masukkan nama pengarang">
                    </div>

                    <div class="form-group">
                        <label for="edisi">Edisi</label>
                        <input type="text" class="form-control" id="edisi" placeholder="Masukkan Edisi Buku">
                    </div>

                    <div class="form-group">
                        <label for="detail">Info Detail Spesifik</label>
                        <textarea class="form-control" id="detail" rows="3"></textarea>
                    </div>



                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="form-group">
                                <label for="pola">Pola</label>
                                <input type="text" class="form-control" id="pola">
                            </div>
                        </div>

                        <div class="col col-lg-3">
                            <div class="form-group">
                                <label for="dari">Dari</label>
                                <input type="text" class="form-control" id="dari">
                            </div>
                        </div>

                        <div class="col col-lg-3">
                            <div class="form-group">
                                <label for="ke">Ke</label>
                                <input type="text" class="form-control" id="ke">
                            </div>
                        </div>

                        <div class="col col-lg-3">
                            <div class="form-group">
                                <label for="koleksi">Tipe Koleksi</label>
                                <select class="form-control" id="koleksi">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="isbn">ISBN / ISSN</label>
                        <input type="text" class="form-control" id="isbn">
                    </div>

                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit">
                    </div>

                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun">
                    </div>

                    <div class="form-group">
                        <label for="tempat">Tempat Terbit</label>
                        <input type="text" class="form-control" id="tempat">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Fisik</label>
                        <input type="text" class="form-control" id="deskripsi">
                    </div>

                    <div class="form-group">
                        <label for="panggil">No. Panggil</label>
                        <input type="text" class="form-control" id="panggil">
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi Buku</label>
                        <input type="text" class="form-control" id="lokasi">
                    </div>


                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button class="btn btn-secondary">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->


@endsection
