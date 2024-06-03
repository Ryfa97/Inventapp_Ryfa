@extends('layout.dashboard')

@section('title', "Stok")

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Stok Gudang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('stok') }}">Stok Gudang</a></div>
            {{-- <div class="breadcrumb-item">Table</div> --}}
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Stok Gudang</h2>
        <div class="row">
            <div class="col-12">
                {{-- @include('layout.custom') --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Stok Gudang</h4>
                        <div class="card-header-action">
                            <a class="btn btn-info btn-primary active" href="#"
                                data-id="export">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Export Stok</a>
                            <a class="btn btn-info btn-primary active search" data-id="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search Stok</a>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
