@extends('layouts/contentNavbarLayout')

@section('title', ' Inventaris - Forms')

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span>Pemakaian Alat</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0"></h5> <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                    <form action="{{ route('bmn.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="pic">PIC</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pic" name="pic" placeholder="" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama">Nama Anggota</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" id="nama" name="nama" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="spt">SPT</label>
                            <div class="col-sm-10">
                                <input type="file" name="spt" id="spt">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="barang">Jenis Barang</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="barang" name="barang" class="form-control" placeholder=""
                                        aria-label="" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Kondisi Barang</label>
                            <div class="col-sm-10">
                                <input type="radio" id="kondisi_barang" name="kondisi_barang" value="bagus">Bagus<br>
                                <input type="radio" id="kondisi_barang" name="kondisi_barang" value="Rusak">Rusak Ringan<br>
                                <input type="radio" id="kondisi_barang" name="kondisi_barang" value="rusak_berat">Rusak Berat
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
