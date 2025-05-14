@extends('layouts/contentNavbarLayout')

@section('title', 'Tabel Inventaris')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light"></span> Tabel Inventaris
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header"></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                        <th>Jenis</th>
                        <th>Nup</th>
                        <th>Tanggal Awal</th>
                        <th>Tanggal Dipinjam</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->merk_barang }}</td>
                            <td>{{ $barang->jenis_barang }}</td>
                            <td>{{ $barang->nup }}</td>
                            <td>{{ $barang->tgl_awal }}</td>
                            <td>{{ $barang->tgl_dipinjam }}</td>
                            <td>{{ $barang->kondisi_barang }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

@endsection
