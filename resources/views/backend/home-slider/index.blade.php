@extends('backend.master')

@section('title', 'Home Slider')
@section('breadcrumb', 'Home Slider')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-hover">
                    <div class="card-header bg-info">
                        <h4 class="text-white float-start">Home Slider</h4>
                        @can('create-permission-category')
                            <a href="{{ route('home-sliders.create') }}" class="rounded-circle float-end text-white text-light f-s-20 ">
                                <span class="f-s-22 border-5"><i class="mdi mdi-plus-circle-outline"></i></span>
                            </a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Tiny Title</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homeSliders as $key => $homeSlider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($homeSlider->banner_image ?? '') }}" alt="banner-image-{{ $key }}" style="height: 60px" />
                                    </td>
                                    <td>{{ $homeSlider->tiny_title ?? '' }}</td>
                                    <td>{{ $homeSlider->title ?? '' }}</td>
                                    <td>{!! $homeSlider->description ?? '' !!}</td>
                                    <td>{{ $homeSlider->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="">
{{--                                        @can('edit-permission-category')--}}
                                            <a href="{{ route('home-sliders.show', $homeSlider->id) }}" class="btn btn-sm btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="{{ route('home-sliders.edit', $homeSlider->id) }}" class="btn btn-sm btn-warning">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
{{--                                        @endcan--}}
{{--                                        @can('delete-permission-category')--}}
                                            <form class="d-inline" action="{{ route('home-sliders.destroy', $homeSlider->id) }}" method="post">
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
