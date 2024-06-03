@extends('layout.dashboard')

@section('title', "Out")

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Barang Keluar</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Kelola Barang</a></div>
            <div class="breadcrumb-item"><a href="{{ route('keluar') }}">Barang Keluar</a></div>
            {{-- <div class="breadcrumb-item">Table</div> --}}
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Data Table Barang Keluar</h2>
        <div class="row">
            <div class="col-12">
                {{-- @include('layout.custom') --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>List Barang Keluar</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="#"
                                data-id="tambah-perusahaan">Tambah Data
                                Keluar</a>
                            <a class="btn btn-info btn-primary active" href="#"
                                data-id="export">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Export Keluar</a>
                            <a class="btn btn-info btn-primary active search" data-id="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search Keluar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="show-import" style="display: none">
                            {{-- @error('import-file')
                                <div class="invalid-feedback d-flex mb-10" role="alert">
                                    <div class="alert_alert-dange_mt-1_mb-1">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror --}}
                            <div class="custom-file">
                                <form action="#" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <label class="custom-file-label" for="file-upload">Choose File</label>
                                    <input type="file" id="file-upload" class="custom-file-input" name="import-file"
                                        data-id="send-import">
                                    <br /> <br />
                                    <div class="footer text-right">
                                        <button class="btn btn-primary" data-id="submit-import">Import File</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="show-search mb-3" style="display: none">
                            {{-- @error('nama_perusahaan')
                                <div class="invalid-feedback d-flex mb-10" role="alert">
                                    <div class="alert_alert-dange_mt-1_mb-1">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror --}}
                            <form id="search" method="GET" action="">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="role">Perusahaan</label>
                                        <input type="text" name="nama_perusahaan" class="form-control"
                                            id="nama_perusahaan" placeholder="Nama Perusahaan"
                                            data-id="search-perusahaan">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary mr-1 button" type="submit"
                                        data-id="submit-search">Submit</button>
                                    <a class="btn btn-secondary" href="" data-id="reset">Reset</a>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Perusahaan</th>
                                        <th>NIB</th>
                                        <th>Status Pemodalan</th>
                                        <th>Uraian Jenis Perusahaan</th>
                                        <th>Kabupaten</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Nomer Telpon</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    @foreach ($perusahaans as $key => $perusahaan)
                                        <tr>
                                            <td>{{ ($perusahaans->currentPage() - 1) * $perusahaans->perPage() + $key + 1 }}
                                            </td>
                                            <td>{{ $perusahaan->nama_perusahaan }}</td>
                                            <td>{{ $perusahaan->nib }}</td>
                                            <td>{{ $perusahaan->status_pmdn }}</td>
                                            <td>{{ $perusahaan->nama_uraian_jenis_perusahaan }}</td>
                                            <td>{{ $perusahaan->nama_kabupaten }}</td>
                                            <td>{{ $perusahaan->alamat }}</td>
                                            <td>{{ $perusahaan->email }}</td>
                                            <td>{{ $perusahaan->no_telp }}</td>
                                            <td class="text-right">
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('perusahaan.edit', $perusahaan->id) }}"
                                                        class="btn btn-sm btn-info btn-icon "
                                                        data-id="edt-{{ $perusahaan->id }}"><i class="fas fa-edit"></i>
                                                        Edit</a>
                                                    <form action="{{ route('perusahaan.destroy', $perusahaan->id) }}"
                                                        method="POST" class="ml-2" id="del-<?= $perusahaan->id ?>">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token"
                                                            value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-sm btn-danger btn-icon "
                                                            data-confirm="Hapus Data Perusahaan?|Apakah Kamu Yakin?"
                                                            data-confirm-yes="submitDel(<?= $perusahaan->id ?>)"
                                                            data-id="del-{{ $perusahaan->id }}">
                                                            <i class="fas fa-times"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $perusahaans->withQueryString()->links() }}

                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
