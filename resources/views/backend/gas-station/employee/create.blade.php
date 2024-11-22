@extends('backend.master')

@section('title', 'Station Employee')
@section('breadcrumb', 'Station Employee')

@section('body')
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white float-start">Station Employee Create</h4>
                    <a href="{{ route('gas-station-employees.index') }}" class="text-white float-end f-s-20">
                        <i class="mdi mdi-page-previous-outline"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($employee) ? route('gas-station-employees.update', $employee->id) : route('gas-station-employees.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($employee))
                            @method('put')
                        @endif
                        <div>
                            <label for="">Employee Name</label>
                            <input type="text" name="name" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($employee) ? $employee->name : '' }}" />
                        </div>
                        <div class="mt-2">
                            <label for="">Employee Roles (Can set multiple roles)</label>
                            <select name="roles[]" class="form-control select2" id="" multiple {{ isset($isShown) ? 'disabled' : '' }} >
                                @foreach($employeeRoles as $employeeRole)
                                    <option value="{{ $employeeRole->id }}"
                                    @if(isset($employee) && count($employee->gasStationEmployeeRoles) > 0)
                                        @foreach($employee->gasStationEmployeeRoles as $gasStationEmployeeRole)
                                            @if($gasStationEmployeeRole->id == $employeeRole->id) selected @endif
                                        @endforeach
                                    @endif
                                    >{{ $employeeRole->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <label for="">Overview</label>
                            <textarea name="overview" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($employee) ? $employee->overview : '' !!}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="">SEO Header</label>
                            <textarea name="seo_header" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($employee) ? $employee->seo_header : '' !!}</textarea>
                        </div>
                        <div class="mt-2">
                            <label for="">SEO Footer</label>
                            <textarea name="seo_footer" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($employee) ? $employee->seo_footer : '' !!}</textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="">FB Profile Link</label>
                                <input type="text" name="fb" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($employee) ? $employee->fb : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Whatsapp Number</label>
                                <input type="text" name="whatsapp" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($employee) ? $employee->whatsapp : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">X Profile Link</label>
                                <input type="text" name="x" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($employee) ? $employee->x : '' }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="">Linkedin Profile Link</label>
                                <input type="text" name="linkedin" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($employee) ? $employee->linkedin : '' }}" />
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="">Profile Image</label>
                            @if(!isset($isShown))
                                <input type="file" name="profile_image" class="form-control" accept="image/*" />
                            @endif
                            @if(isset($employee->profile_image))
                                <img src="{{ asset($employee->profile_image) }}" alt="" style="height: 60px" />
                            @endif
                        </div>
                        <div class="mt-2">
                            <label for="">Active</label>
                            <div>
                                <div class="material-switch">
                                    <input id="someSwitchOptionInfo" name="status" {{ isset($isShown) ? 'disabled' : '' }}  class="form-check-input success check-outline outline-success" type="checkbox" {{ isset($employee) && $employee->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionInfo" class="label-info"></label>
                                </div>
                            </div>
                        </div>
                        @if(!isset($isShown))
                        <div>
                            <input type="submit" class="btn btn-success btn-sm float-end" value="{{ isset($employee) ? 'Update' : 'Create' }} Station Employee" />
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
