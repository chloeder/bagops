@extends('layout.master')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dokumen</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dokumen</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="mt-3">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Dokumen List
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dokumen)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $dokumen->judul }}</td>
                                    <td class="align-middle">{{ $dokumen->nomor }}</td>
                                    <td class="align-middle">{{ $dokumen->kategori->nama }}</td>
                                    <td class="align-middle ">
                                        @if ($dokumen->status_type == '1')
                                            <a href="/dokumen/detail/{{ $dokumen->slug }}"
                                                class="btn btn-sm btn-warning">Diproses</a>
                                        @elseif($dokumen->status_type == '2')
                                            <a href="/dokumen/detail/{{ $dokumen->slug }}"
                                                class="btn btn-sm btn-success">Diterima</a>
                                        @else
                                            <a href="/dokumen/detail/{{ $dokumen->slug }}"
                                                class="btn btn-sm btn-danger">Terlambat</a>
                                        @endif
                                    </td>
                                    <th class="d-flex align-middle">
                                        <a href="/dokumen/detail/{{ $dokumen->slug }}" class="btn btn-info btn-sm px-2">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="/dokumen/{{ $dokumen->slug }}/edit"
                                            class="btn btn-primary btn-sm px-2 mx-2 ">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="/dokumen/{{ $dokumen->slug }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-2 ">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
