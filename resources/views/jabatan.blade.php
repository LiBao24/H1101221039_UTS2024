@extends('layout.main')

@section('title', 'Jabatan')

@section('content')
    @include('layout.partial.side')

    <main class="main-content position-relative border-radius-lg ">
        @include('layout.partial.header')
    @section('title', 'Jabatan')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Jabatan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="card-body px-4 pt-0 pb-4">
                                <div class="col md-5">    
                                    <label for="namajabatan" class="form-label">Nama Jabatan</label>
                                    <input type="text" id="namajabatan" name="namajabatan" class="form-control" required>
                                    <label for="bidang" class="form-label">Bidang</label>
                                    <input type="text" id="bidang" name="bidang" class="form-control" required>
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
                        <h6>Data Jabatan</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Jabatan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Bidang</th>
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
                                                    <h6 class="px-2 mb-0 text-sm">CEO</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Leader</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Merupakan Chief Executive Officer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">CTO</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Leader</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Merupakan Chief Technology Officer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">CMO</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Leader</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Merupakan Chief Marketing Officer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">CFO</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Leader</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Merupakan Chief Financial Officer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">COO</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Leader</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Merupakan Chief Operational Officer</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="px-2 mb-0 text-sm">CIO</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Leader</p>
                                        </td>
                                        <td class="align-middle text-right">
                                            <span class="text-secondary text-xs font-weight-bold">Merupakan Chief Information Officer</span>
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
