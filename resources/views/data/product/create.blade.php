@extends('layout.dashboard')

@section('title', "Products")

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Products</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Data</a></div>
            <div class="breadcrumb-item"><a href="{{ route('product') }}">Products</a></div>
            {{-- <div class="breadcrumb-item">Table</div> --}}
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tambah Product</h2>
        <div class="card">
            <div class="card-header">
                <h4>Validasi Tambah Data</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('product.simpan') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label>Nama Category</label>
                        <select id="category_id"
                            class="form-control select2  @error('category_id') is-invalid @enderror"
                            name="category_id" data-id="select-category">
                            <option value="">Pilih Nama Category</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}" data-id="cate-{{ $category->id }}">
                                    {{ $category->nama_category }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_product">Nama Product</label>
                        <input type="text" class="form-control @error('nama_product') is-invalid @enderror"
                            id="nama_product" name="nama_product" placeholder="Nama Product" value=""
                            data-id="nama-product">
                        @error('nama_product')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary" data-id="submit">Submit</button>
                <a class="btn btn-secondary" href="{{ route('product') }}">Cancel</a>
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
