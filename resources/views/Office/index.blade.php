@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Office <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">This section provides a list of Offices</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Office</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Offices under <small class="text-success font-w600">{{ Auth::user()->attached_to->resource_model() }} - {{ Auth::user()->attached_to->resource->name }}</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell">Address</th>
                            <th class="d-none d-sm-table-cell">Block/Municipality</th>
                            <th class="d-none d-sm-table-cell">Mobile</th>
                            <th class="d-none d-sm-table-cell">Email</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center font-size-sm">Office ID</td>
                            <td class="font-w600 font-size-sm">
                                <a href="be_pages_generic_blank.html">Office Name</a>
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                Office Address
                            </td>
                            <td class="d-none d-sm-table-cell">
                                Office Block/Municipality
                            </td>
                            <td class="d-none d-sm-table-cell">
                                Office HOD Mobile
                            </td>
                            <td class="d-none d-sm-table-cell">
                                Office Email
                            </td>
                            <td>
                                <em class="text-muted font-size-sm">Office Updated at</em>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
@endsection