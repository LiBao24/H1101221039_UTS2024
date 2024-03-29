@extends('layout.main')

@section('title', 'Pendidikan')

@section('content')
    @include('layout.partial.side')

    <main class="main-content position-relative border-radius-lg ">
        @include('layout.partial.header')
    @section('title', 'Pendidikan')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Pendidikan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="card-body px-4 pt-0 pb-4">
                                <div class="col md-5">    
                                    <label for="namapendidikan" class="form-label">Nama Pendidikan</label>
                                    <input type="text" id="namapendidikan" name="namapendidikan" class="form-control" required>
                                    <label for="gelar" class="form-label">Gelar</label>
                                    <input type="text" id="gelar" name="gelar" class="form-control" required>
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
                                </div>
                            </div>
                            <div class="card-footer text-end align-items-right">
                                <button type="button" class="btn btn-lg btn-primary btn-lg w-20 mt-1 mb-0">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Pendidikan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Pendidikan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Gelar</th>
                                        <th
                                            class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">Sarjana Komputer</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">S. Kom.</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Strata 1 Komputer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">Sarjana Manajemen</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">S. M.</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Strata 1 Manajemen</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">Sarjana Teknik</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">S. T.</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Strata 1 Teknik</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">Sarjana Akuntansi</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">S. Ak.</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Strata 1 Akuntansi</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @include('layout.partial.footer')
        </div>
</main>
@endsection
