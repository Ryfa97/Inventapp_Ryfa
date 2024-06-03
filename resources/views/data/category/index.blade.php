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
        <h2 class="section-title">Data Table Category</h2>
        <div class="row">
            <div class="col-12">
                {{-- @include('layout.custom') --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>List Category</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="{{ route('category.create') }}"
                                data-id="tambah-perusahaan">Tambah Data
                                Category</a>
                            <a class="btn btn-info btn-primary active" href="#"
                                data-id="export">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Export Category</a>
                            <a class="btn btn-info btn-primary active search" data-id="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="show-search mb-3" style="display: none">
                            <form id="search" method="GET" action="{{ route('category') }}">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="role">Nama Category</label>
                                        <input type="text" name="nama_category" class="form-control"
                                            id="nama_category" placeholder="Nama Category" data-id="search-category">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary mr-1 button" type="submit"
                                        data-id="submit-search">Submit</button>
                                    <a class="btn btn-secondary" href="{{ route('category') }}"
                                        data-id="cancel">Reset</a>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Category</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    @foreach ($categorys as $key => $category)
                                        <tr>
                                            <td>{{ ($categorys->currentPage() - 1) * $categorys->perPage() + $key + 1 }}
                                            </td>
                                            <td>{{ $category->nama_category }}</td>
                                            <td class="text-right">
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="btn btn-sm btn-info btn-icon "
                                                        data-id="edt-{{ $category->id }}"><i class="fas fa-edit"></i>
                                                        Edit</a>
                                                    <a href="{{ route('category.destroy', $category->id) }}" data-id="delete-{{ $category->id }}">
                                                        <button type="submit" class="btn btn-sm btn-danger btn-icon">
                                                            <i class="fas fa-times"></i> Delete
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $categorys->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('customScript')
<script>
    $(document).ready(function() {
        $('.import').click(function(event) {
            event.stopPropagation();
            $(".show-import").slideToggle("fast");
            $(".show-search").hide();
        });
        $('.search').click(function(event) {
            event.stopPropagation();
            $(".show-search").slideToggle("fast");
            $(".show-import").hide();
        });
        $('#file-upload').change(function() {
            var i = $(this).prev('label').clone();
            var file = $('#file-upload')[0].files[0].name;
            $(this).prev('label').text(file);
        });
    });

    function submitDel(id) {
        $('#del-' + id).submit()
    }
</script>
@endpush

@push('customStyle')
@endpush
