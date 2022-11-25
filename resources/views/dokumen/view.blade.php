@extends('layout.master')
@section('content')
    <!-- // Basic multiple Column Form section start -->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{ $data->judul }}</h3>
                    <p class="text-subtitle text-muted">Dokumen {{ $data->judul }}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">BAGOPS - Polres Minahasa</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <p>
                        Berikut adalah lampiran dokumen.
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label for="judul" class="mb-2">Nama :</label>
                            <span>{{ $data->judul }}</span>
                        </li>
                        <li class="list-group-item">
                            <label for="judul" class="mb-2">Kode :</label>
                            <span>{{ $data->nomor }}</span>
                        </li>
                        <li class="list-group-item">
                            <label for="judul" class="mb-2">Kategori :</label>
                            <span>{{ $data->kategori->nama }}</span>
                        </li>
                        <li class="list-group-item">
                            <label for="judul" class="mb-2">Keterangan :</label>
                            <span>{{ $data->keterangan }}</span>
                        </li>
                        <li class="list-group-item">
                            <label for="judul" class="mb-2">Status :</label>
                            <span>
                                @if ($data->status_type == 1)
                                    <a href="/dokumen/detail/{{ $data->slug }}"
                                        class="btn btn-sm btn-warning">Diproses</a>
                                @elseif($data->status_type == 2)
                                    <a href="/dokumen/detail/{{ $data->slug }}"
                                        class="btn btn-sm btn-success">Diterima</a>
                                @else
                                    <a href="/dokumen/detail/{{ $data->slug }}"
                                        class="btn btn-sm btn-danger">Terlambat</a>
                                @endif
                            </span>
                        </li>
                        <li class="list-group-item">
                            <label for="judul" class="mb-2">File :</label>
                            <a href="/download/{{ $data->slug }}" type="button"
                                class="btn btn-sm btn-success">Download</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Status</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <form action="/dokumen/detail/{{ $data->slug }}" method="post" class="form d-flex">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="status_type">Options</label>
                            <select class="form-select" id="status_type" name="status_type">
                                @foreach ($status as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>

                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                Update
                            </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
<!-- // Basic multiple Column Form section end -->
