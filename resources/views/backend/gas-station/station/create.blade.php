@extends('backend.master')

@section('title', 'Station Create')
@section('breadcrumb', 'Station Create')

@section('body')

    <div class="row py-5">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white float-start">Station Create</h4>
                    <a href="{{ route('gas-stations.index') }}" class="text-white float-end f-s-20">
                        <i class="mdi mdi-page-previous-outline"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($gasStation) ? route('gas-stations.update', $gasStation->id) : route('gas-stations.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($gasStation))
                            @method('put')
                        @endif
                        <input type="hidden" name="gas_station_id" value="{{ $parent_station_id }}" />
                        <div>
                            <label for="">Station Name <span class="text-danger">(required)</span></label>
                            <input type="text" name="name" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->name : '' }}" />
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="">Gas Station Peoples (can set multiple people)</label>
                                <select name="gas_station_employees[]" class="form-control select2" id="" multiple {{ isset($isShown) ? 'disabled' : '' }} >
                                    @foreach($stationEmployees as $stationEmployee)
                                        <option value="{{ $stationEmployee->id }}"
                                                @if(isset($gasStation) && count($gasStation->gasStationEmployees) > 0)
                                                    @foreach($gasStation->gasStationEmployees as $gasStationEmployee)
                                                        @if($stationEmployee->id == $gasStationEmployee->id) selected @endif
                                            @endforeach
                                            @endif
                                        >{{ $stationEmployee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Key Peoples </label>
                                <select name="key_people_id" class="form-control select2" id=""  {{ isset($isShown) ? 'disabled' : '' }} >
                                    @foreach($stationEmployees as $stationKeyEmployee)
                                        <option value="{{ $stationKeyEmployee->id }}" {{ isset($gasStation) && $gasStation->key_people_id == $stationKeyEmployee->id ? 'selected' : '' }}>{{ $stationKeyEmployee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="">Overview</label>
                            <textarea name="overview" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($gasStation) ? $gasStation->overview : '' !!}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="">Office Address</label>
                            <textarea name="office_address" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($gasStation) ? $gasStation->office_address : '' !!}</textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="">State</label>
                                <input type="text" name="state" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->state : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">State Id</label>
                                <input type="text" name="state_id" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->state_id : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Zip Code</label>
                                <input type="text" name="zip_code" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->zip_code : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Office Phone Number</label>
                                <input type="text" name="office_phone_number" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->office_phone_number : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Office Optional Phone Number</label>
                                <input type="text" name="office_phone_number_2" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->office_phone_number_2 : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Office Email (Official)</label>
                                <input type="text" name="office_email_1" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->office_email_1 : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Office Email (Support)</label>
                                <input type="text" name="office_email_2" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->office_email_2 : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Office Email (Contact)</label>
                                <input type="text" name="office_email_3" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->office_email_3 : '' }}" />
                            </div>
                            <div class="col-md-12">
                                <label for="">Google Map Location</label>
                                <input type="text" name="location_map" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->location_map : '' }}" />
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="">SEO Header</label>
                            <textarea name="seo_header" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($gasStation) ? $gasStation->seo_header : '' !!}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="">SEO Footer</label>
                            <textarea name="seo_footer" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($gasStation) ? $gasStation->seo_footer : '' !!}</textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="">FB Profile Link</label>
                                <input type="text" name="fb" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->fb : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Whatsapp Number</label>
                                <input type="text" name="whatsapp" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->whatsapp : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Instagram Profile Link</label>
                                <input type="text" name="insta" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->insta : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Telegram Profile Link</label>
                                <input type="text" name="telegram" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->telegram : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Skype Profile Link</label>
                                <input type="text" name="skype" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->skype : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Linkedin Profile Link</label>
                                <input type="text" name="linkedin" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($gasStation) ? $gasStation->linkedin : '' }}" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="">Logo</label>
                                @if(!isset($isShown))
                                    <input type="file" name="logo" class="form-control" accept="image/*" />
                                @endif
                                @if(isset($gasStation->logo))
                                    <img src="{{ asset($gasStation->logo) }}" alt="" style="height: 60px" />
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="">Profile Image</label>
                                @if(!isset($isShown))
                                    <input type="file" name="main_image" class="form-control" accept="image/*" />
                                @endif
                                @if(isset($gasStation->main_image))
                                    <img src="{{ asset($gasStation->main_image) }}" alt="" style="height: 60px" />
                                @endif
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Sub Images</label>
                                @if(!isset($isShown))
                                    <input type="file" name="sub_images[]" multiple class="form-control" accept="image/*" />
                                @endif
                                @if(isset($gasStation->sub_images))
                                    @foreach(json_decode($gasStation->sub_images) as $key => $subImage )
                                        <img src="{{ asset($subImage) }}" alt="" style="height: 60px" class="me-1" />
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="">Active</label>
                            <div>
                                <div class="material-switch">
                                    <input id="someSwitchOptionInfo" name="status" {{ isset($isShown) ? 'disabled' : '' }}  class="form-check-input success check-outline outline-success" type="checkbox" {{ isset($gasStation) && $gasStation->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionInfo" class="label-info"></label>
                                </div>
                            </div>
                        </div>
                        @if(!isset($isShown))
                        <div>
                            <input type="submit" class="btn btn-success btn-sm float-end" value="{{ isset($gasStation) ? 'Update' : 'Create' }} Station" />
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    @include('backend.includes.asset.plugin-files.select-2')
    <!--tinymce js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.3.2/tinymce.min.js" integrity="sha512-9w/jRiVYhkTCGR//GeGsRss1BJdvxVj544etEHGG1ZPB9qxwF7m6VAeEQb1DzlVvjEZ8Qv4v8YGU8xVPPgovqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        tinymce.init({
            selector: 'textarea',
            height: 200,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });


    </script>
@endpush
