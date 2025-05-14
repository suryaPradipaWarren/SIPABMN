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
                        <th>PIC</th>
                        <th>Nama Tim</th>
                        <th>SPT</th>
                        <th>Barang</th>
                        <th>Kondisi Barang</th>
                        <th>Tanggal</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bmn as $item)
                        <tr>
                            <td>{{ $item->pic }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->spt }}</td>
                            <td>{{ $item->barang }}</td>
                            <td>{{ $item->kondisi_barang }}</td>
                            <td>{{ $item->tanggal }}</td>
                            {{-- <td>
                                <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

@endsection
