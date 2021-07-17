@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Makul
                
                    <a href="{{ route('tambah.makul') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>Kode Makul</th>
                                <th>Nama Makul</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($makul as $mkl)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mkl->kd_makul }}</td>
                                <td>{{ $mkl->nama_makul }}</td>
                                <td>{{ $mkl->sks }}</td>
                                <td>
                                    <a href="{{ route('makul.edit', $mkl->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('makul.hapus', $mkl->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
