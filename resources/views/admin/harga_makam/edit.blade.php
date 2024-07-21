@extends('layouts.admin')

@section('title', 'Edit Harga Makam')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Harga Makam</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.harga_makam.index') }}">Harga Makam</a></div>
                    <div class="breadcrumb-item">Edit Harga Makam</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <form class="card mb-4" method="POST"
                            action="{{ route('admin.harga_makam.update', $harga_makam->id_harga) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Edit Harga Makam</h4>
                            </div>

                            <div class="card-body">
                                <x-select name="id_blok" label="ID Blok" placeholder="Pilih ID Blok" :data="$blok"
                                    :value="$harga_makam->id_blok" />
                                <x-text-input name="harga_makam" label="Harga Makam" placeholder="Masukan Harga Makam"
                                    :value="$harga_makam->harga_makam" />
                            </div>

                            <div class="card-footer pt-0 d-flex justify-content-end">
                                <a href="{{ route('admin.harga_makam.index') }}">
                                    <button type="button" class="btn btn-secondary px-3 mr-2">Kembali</button>
                                </a>
                                <button type="submit" class="btn btn-primary px-3">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
