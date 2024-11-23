@extends('backend.master')

@section('title', 'Gas Stations')
@section('breadcrumb', 'Gas Stations')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-hover">
                    <div class="card-header bg-info">
                        <h4 class="text-white float-start">Gas Stations</h4>
{{--                        @can('create-permission-category')--}}
                            <a href="{{ isset($_GET['station']) ? route('gas-stations.create', ['station' => $_GET['station']]) : route('gas-stations.create') }}" class="rounded-circle float-end text-white text-light f-s-20 ">
                                <span class="f-s-22 border-5"><i class="mdi mdi-plus-circle-outline"></i></span>
                            </a>
{{--                        @endcan--}}
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>P. Status</th>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Overview</th>
                                <th>Office Info</th>
                                <th>Social</th>
                                <th>Location</th>
                                <th>Key People</th>
                                <th>SEO Header</th>
                                <th>SEO Footer</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($gasStations as $key => $gasStation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gasStation->gas_station_id == 0 ? 'Parent' : $gasStation->$gasStation->name }}</td>
                                    <td>{{ $gasStation->name ?? '' }}</td>
                                    <td>
                                        <div>
                                            <span>Logo: </span>
                                            <a href="{{ asset($gasStation->logo ?? '') }}" target="_blank"><img src="{{ asset($gasStation->logo ?? '') }}" alt="station-logo-{{ $key }}" style="height: 40px" /></a>
                                        </div>
                                        <div class="mt-2">
                                            <span>Main Image: </span>
                                            <a href="{{ asset($gasStation->main_image ?? '') }}" target="_blank"><img src="{{ asset($gasStation->main_image ?? '') }}" alt="station-main-image-{{ $key }}" style="height: 40px" /></a>
                                        </div>
                                        <div class="mt-2">
                                            <span>Sub Images: </span>
                                            @if(isset($gasStation->sub_images))
                                                @foreach(json_decode($gasStation->sub_images) as $index => $singleImage)
                                                    <a href="{{ asset($singleImage ?? '') }}" class="m-2"><img src="{{ asset($singleImage ?? '') }}" alt="station-sub-image-{{ $key }}" style="height: 40px" /></a>
                                                @endforeach
                                            @endif
                                        </div>
                                    </td>
                                    <td>{!! $gasStation->overview ?? '' !!}</td>
                                    <td>
                                        <div>
                                            <span>Phone: {{ $gasStation->office_phone_number }}</span> <br>
                                            <span>Address: {{ $gasStation->office_address }}</span> <br>
                                        </div>
                                        <div class="">
                                            <p><span>State: {{ $gasStation->state }}</span>, <span>State Id: {{ $gasStation->state_id }}</span>, <span>Zip Code: {{ $gasStation->zip_code }}</span>, </p>
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            <span class="me-2"><a href="{{ $gasStation->fb ?? '' }}" target="_blank"><i class="fa fa-facebook-f"></i></a></span>
                                            <span class="me-2"><a href=" https://wa.me/{{ $gasStation->whatsapp ?? '' }}" target="_blank"><i class="fa fa-whatsapp"></i></a></span>
                                            <span class="me-2"><a href="{{ $gasStation->insta ?? '' }}" target="_blank"><i class="fa fa-instagram"></i></a></span>
                                            <span class="me-2"><a href="{{ $gasStation->telegram ?? '' }}" target="_blank"><i class="fa fa-telegram"></i></a></span>
                                            <span class="me-2"><a href="{{ $gasStation->linkedin ?? '' }}" target="_blank"><i class="fa fa-linkedin"></i></a></span>
                                            <span class="me-2"><a href="{{ $gasStation->skype ?? '' }}" target="_blank"><i class="fa fa-skype"></i></a></span>
                                        </p>
                                    </td>
                                    <td>
                                        <div class="" style="height: 200px; width: 250px">
                                            {!! $gasStation->location_map !!}
                                        </div>
                                    </td>
                                    <td>
                                        {{ isset($gasStation->gasStationKeyPeople) ? $gasStation->gasStationKeyPeople->name : '' }}
                                    </td>
                                    <td>{!! $gasStation->seo_header ?? '' !!}</td>
                                    <td>{!! $gasStation->seo_footer ?? '' !!}</td>
                                    <td>{{ $gasStation->slug ?? '' }}</td>
                                    <td>{{ $gasStation->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="">
{{--                                        @can('edit-permission-category')--}}
                                            <a href="{{ route('gas-stations.index', ['station' => $gasStation->id]) }}" class="btn btn-sm btn-primary">
                                                <i class="mdi mdi-arrow-all"></i>
                                            </a>
                                            <a href="{{ route('gas-stations.show', $gasStation->id) }}" class="btn btn-sm btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="{{ route('gas-stations.edit', $gasStation->id) }}" class="btn btn-sm btn-warning">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
{{--                                        @endcan--}}
{{--                                        @can('delete-permission-category')--}}
                                            <form class="d-inline" action="{{ route('gas-stations.destroy', $gasStation->id) }}" method="post">
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
