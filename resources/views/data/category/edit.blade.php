@extends('layout.dashboard')

@section('title', "Category")

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Data</a></div>
            <div class="breadcrumb-item"><a href="{{ route('category') }}">Category</a></div>
            {{-- <div class="breadcrumb-item">Table</div> --}}
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Data Edit Category</h2>
        <div class="card">
            <div class="card-header">
                <h4>Validasi Edit Data</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_category">Nama Category</label>
                        <input type="text" class="form-control @error('nama_category') is-invalid @enderror"
                            id="nama_category" name="nama_category" placeholder="Contoh : Kabel | ONT | TP-Link"
                            value="{{ $category->nama_category }}">
                        @error('nama_category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary" data-id="submit">Submit</button>
                <a class="btn btn-secondary" href="{{ route('category') }}">Cancel</a>
            </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('customScript')
<script src="/assets/js/select2.min.js"></script>
@endpush

@push('customStyle')
<link rel="stylesheet" href="/assets/css/select2.min.css">
@endpush
