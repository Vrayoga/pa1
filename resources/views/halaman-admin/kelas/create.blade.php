@extends('layout.MainLayout')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Form Kelas</h6>

                <form action="/kelas-store" class="forms-sample" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas" id="kelas">
                            <option value="" selected disabled>Pilih Kelas</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan"
                            placeholder="Masukkan Jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="/kelas" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>

    </div>
@endsection
