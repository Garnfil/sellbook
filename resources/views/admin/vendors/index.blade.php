@extends('layouts.admin.layout')

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left flex-column align-items-start">
                        <h3>List Vendors</h3>
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">List Vendors</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('admin.vendors.create') }}" class="btn btn-primary pull-right">Add Customer</a>
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
            window.LaravelDataTables['vendor-details-table'].draw(false);
        }
        
        // For deleting data
        $('#vendor-details-table').on('click', '.delete-btn', function (e) {
            let data_id = $(this).attr('data-id');
            renderSweetAlert({
                title: 'Are you sure you want to delete?',
                ajax: {
                    url: `{{ route('admin.vendors.destroy', '') }}/${data_id}`,
                    method: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                },
                onRunFunction: showTable,
            }) 
        })
    </script>
@endpush