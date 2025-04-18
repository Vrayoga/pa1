@extends('layout.MainLayout')

@section('content')
    <div class="page-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
        <div class="card">
            <div class="card-body">

                <h6 class="card-title">Form Kategori Ekstrakurikuler</h6>

                <form action="/kategori-store" class="forms-sample" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori Ekstra</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" 
                            placeholder="Masukkan Kategori">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="/kategori" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>

    </div>
@endsection
