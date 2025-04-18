@extends('layout.MainLayout')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Form siswa</h6>

                <form action="/siswa-store" class="forms-sample" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Nama siswa</label>
                        <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" autocomplete="off"
                            placeholder="Nama siswa">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Sekolah asal</label>
                        <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal"
                            placeholder="Sekolah asal">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nis</label>
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="Nis">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="/siswa" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>

    </div>
@endsection
