@extends('backend.master')

@section('title', 'Home Slider')
@section('breadcrumb', 'Home Slider')

@section('body')
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white float-start">Home Slider Create</h4>
                    <a href="{{ route('home-sliders.index') }}" class="text-white float-end f-s-20">
                        <i class="mdi mdi-page-previous-outline"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($homeSlider) ? route('home-sliders.update', $homeSlider->id) : route('home-sliders.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($homeSlider))
                            @method('put')
                        @endif
                        <div>
                            <label for="">Tiny Title</label>
                            <input type="text" name="tiny_title" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($homeSlider) ? $homeSlider->tiny_title : '' }}" />
                        </div>
                        <div>
                            <label for="">Title</label>
                            <input type="text" name="title" {{ isset($isShown) ? 'readonly' : '' }} class="form-control" value="{{ isset($homeSlider) ? $homeSlider->title : '' }}" />
                        </div>
                        <div class="mt-2">
                            <label for="">Description</label>
                            <textarea name="description" {{ isset($isShown) ? 'disabled' : '' }} class="form-control" id="elm1" cols="30" rows="2">{!! isset($homeSlider) ? $homeSlider->description : '' !!}</textarea>
                        </div>
                        <div>
                            <label for="">Banner Image</label>
                            @if(!isset($isShown))
                                <input type="file" name="banner_image" class="form-control" accept="image/*" />
                            @endif
                            @if(isset($homeSlider->banner_image))
                                <img src="{{ asset($homeSlider->banner_image) }}" alt="" style="height: 60px" />
                            @endif
                        </div>
                        <div class="mt-2">
                            <label for="">Active</label>
                            <div>
                                <div class="material-switch">
                                    <input id="someSwitchOptionInfo" name="status" {{ isset($isShown) ? 'disabled' : '' }}  class="form-check-input success check-outline outline-success" type="checkbox" {{ isset($homeSlider) && $homeSlider->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionInfo" class="label-info"></label>
                                </div>
                            </div>
                        </div>
                        @if(!isset($isShown))
                        <div>
                            <input type="submit" class="btn btn-success btn-sm float-end" value="{{ isset($homeSlider) ? 'Update' : 'Create' }} Home Slider" />
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <!--tinymce js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.3.2/tinymce.min.js" integrity="sha512-9w/jRiVYhkTCGR//GeGsRss1BJdvxVj544etEHGG1ZPB9qxwF7m6VAeEQb1DzlVvjEZ8Qv4v8YGU8xVPPgovqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        tinymce.init({
            selector: 'textarea#elm1',
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
