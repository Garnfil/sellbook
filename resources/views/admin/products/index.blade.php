@extends('layouts.admin.layout')

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left flex-column align-items-start">
                        <h3>List Products</h3>
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">List Product</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="btn btn-primary pull-right">Add Product</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {!! $dataTable->table(['class' => 'table-borderless']) !!}
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    {!! $dataTable->scripts() !!}

    <script>
        function showTable() {
            window.LaravelDataTables['products-table'].draw(false);
        }
        // showTable();
    </script>
@endpush
