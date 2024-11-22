@extends('backend.master')

@section('title', 'Newsletters')
@section('breadcrumb', 'Newsletters')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-hover">
                    <div class="card-header bg-info">
                        <h4 class="text-white float-start">Newsletters</h4>

                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newsletters as $newsletter)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $newsletter->email ?? '' }}</td>
                                    <td>{{ $newsletter->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="">
{{--                                        @can('edit-permission-category')--}}
                                            <a href="{{ route('newsletters.edit', $newsletter->id) }}" class="btn btn-sm btn-warning">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
{{--                                        @endcan--}}
{{--                                        @can('delete-permission-category')--}}
                                            <form class="d-inline" action="{{ route('newsletters.destroy', $newsletter->id) }}" method="post">
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
