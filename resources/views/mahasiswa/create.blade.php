@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col">
                                    <label for="">No</label>
                                    <input type="text" name="user_id" class="form-control" placeholder="Tambahkan user id">
                                </div>
                                <div class="col">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" placeholder="Tambahkan Nama">
                                </div>
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir">
                                </div>
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir">
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Telepon">
                                </div>
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat">
                                </div>
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="gender" class="form-control" placeholder="Tambahkan Jenis Kelamin">
                                </div>
                                <div class="col">
                                    <label for="">foto</label>
                                    <input type="file" name="foto" class="form-control" placeholder="Tambahkan Foto">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
