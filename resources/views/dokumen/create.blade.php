@extends('layout.master')
@section('content')
    <!-- // Basic multiple Column Form section start -->


    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Upload Dokumen</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Dokumen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Upload Dokumen</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="/dokumen/tambah" method="post" class="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-4">
                                                <label for="judul" class="mb-2">Nama Dokumen</label>
                                                <input type="text" id="judul" class="form-control"
                                                    placeholder="Nama Dokumen" name="judul" required />
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="nomor" class="mb-2">Kode Dokumen</label>
                                                <input type="text" id="nomor" class="form-control"
                                                    placeholder="Kode Dokumen" name="nomor" required />
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="kategori_id">Kategori</label>
                                                    <select class="form-select" id="kategori_id" name="kategori_id">
                                                        <option selected>Choose...</option>
                                                        @foreach ($kategori as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="mb-3">
                                                    <label for="file" class="form-label">Input
                                                        Dokumen</label>
                                                    <input class="form-control" type="file" id="file" name="file"
                                                        multiple>
                                                </div>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="keterangan" class="mb-2">Keterangan</label>
                                                <textarea class="form-control" id="keterangan" rows="3" name="keterangan" required></textarea>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- // Basic multiple Column Form section end -->
@endsection
