@extends('template.app')

@section('content')
<div class=" container-fluid p-4">
    <div id="form-anggota">
        <h3 class="mb-4">Tambah Anggota</h3>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="npm">ID Anggota / NPM</label>
                        <input type="text" class="form-control" id="npm" placeholder="Masukkan ID / NPM anggota">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Anggota</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap anggota">
                    </div>

                    <div class="form-group">
                        <label for="npm">Kata Sandi</label>
                        <input type="password" class="form-control" id="npm" placeholder="********">
                    </div>

                    <div class="form-group">
                        <label for="npm">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="npm" placeholder="********">
                    </div>



                    <div class="form-group">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tgl" placeholder="Masukkan tanggal lahir">
                    </div>

                    <div class="row">
                        <div class="col col-lg-6">
                            <div class="form-group">
                                <label for="anggota">Anggota Sejak</label>
                                <input type="text" class="form-control" id="anggota">
                            </div>
                        </div>

                        <div class="col col-lg-6">
                            <div class="form-group">
                                <label for="berlaku">Berlaku Hingga</label>
                                <input type="text" class="form-control" id="berlaku">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk">
                            <option>Laki - Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="telp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="telp">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
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
