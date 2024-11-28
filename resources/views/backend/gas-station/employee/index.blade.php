@extends('backend.master')

@section('title', 'Station Employee')
@section('breadcrumb', 'Station Employee')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-hover">
                    <div class="card-header bg-info">
                        <h4 class="text-white float-start">Station Employee</h4>
{{--                        @can('create-permission-category')--}}
                            <a href="{{ route('gas-station-employees.create') }}" class="rounded-circle float-end text-white text-light f-s-20 ">
                                <span class="f-s-22 border-5"><i class="mdi mdi-plus-circle-outline"></i></span>
                            </a>
{{--                        @endcan--}}
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>P. Image</th>
                                <th>Name</th>
                                <th>Roles</th>
                                <th>Overview</th>
                                <th>Social</th>
{{--                                <th>SEO Header</th>--}}
{{--                                <th>SEO Footer</th>--}}
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $key => $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($employee->profile_image ?? '') }}" alt="employee-image-{{ $key }}" style="height: 60px" />
                                    </td>
                                    <td>{{ $employee->name ?? '' }}</td>
                                    <td>
                                        @foreach($employee->gasStationEmployeeRoles as $gasStationEmployeeRole)
                                            <span class="badge bg-primary">{{ $gasStationEmployeeRole->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{!! $employee->overview ?? '' !!}</td>
                                    <td>
                                        <p>
                                            <span class="me-2"><a href="{{ $employee->fb ?? '' }}" target="_blank"><i class="fa fa-facebook-f"></i></a></span>
                                            <span class="me-2"><a href="{{ $employee->x ?? '' }}" target="_blank"><i class="fa fa-twitter"></i></a></span>
                                            <span class="me-2"><a href="{{ $employee->linkedin ?? '' }}" target="_blank"><i class="fa fa-linkedin"></i></a></span>
                                            <span class="me-2"><a href=" https://wa.me/{{ $employee->whatsapp ?? '' }}" target="_blank"><i class="fa fa-whatsapp"></i></a></span>
                                        </p>
                                    </td>
{{--                                    <td>{!! $employee->seo_header ?? '' !!}</td>--}}
{{--                                    <td>{!! $employee->seo_footer ?? '' !!}</td>--}}
                                    <td>{{ $employee->slug ?? '' }}</td>
                                    <td>{{ $employee->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="">
{{--                                        @can('edit-permission-category')--}}
                                            <a href="{{ route('gas-station-employees.show', $employee->id) }}" class="btn btn-sm btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="{{ route('gas-station-employees.edit', $employee->id) }}" class="btn btn-sm btn-warning">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
{{--                                        @endcan--}}
{{--                                        @can('delete-permission-category')--}}
                                            <form class="d-inline" action="{{ route('gas-station-employees.destroy', $employee->id) }}" method="post">
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
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/font-awesome.min.css">
@endpush

@push('script')

@include("backend.includes.asset.plugin-files.datatable")
@include("backend.includes.asset.plugin-files.sweet-alert-2")


@endpush
