@extends('backend.master')

@section('title', 'Employee Roles')
@section('breadcrumb', 'Employee Roles')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-hover">
                    <div class="card-header bg-info">
                        <h4 class="text-white float-start">Employee Roles</h4>
                        @can('create-permission-category')
                            <a href="{{ route('employee-roles.create') }}" class="rounded-circle float-end text-white text-light f-s-20 ">
                                <span class="f-s-22 border-5"><i class="mdi mdi-plus-circle-outline"></i></span>
                            </a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employeeRoles as $employeeRole)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employeeRole->name ?? '' }}</td>
                                    <td>{{ $employeeRole->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="">
{{--                                        @can('edit-permission-category')--}}
                                            <a href="{{ route('employee-roles.edit', ['employee_role' => $employeeRole->id]) }}" class="btn btn-sm btn-warning">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
{{--                                        @endcan--}}
{{--                                        @can('delete-permission-category')--}}
                                            <form class="d-inline" action="{{ route('employee-roles.destroy', $employeeRole->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger delete-data">
                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                </button>
                                            </form>
{{--                                        @endcan--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')

@endpush

@push('script')

@include("backend.includes.asset.plugin-files.datatable")
@include("backend.includes.asset.plugin-files.sweet-alert-2")


@endpush
