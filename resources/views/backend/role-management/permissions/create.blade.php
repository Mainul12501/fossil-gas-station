@extends('backend.master')

@section('title', 'Permissions')

@section('body')
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="float-start text-light">Permission Create</h4>
                        <a href="{{ route('permissions.index') }}" class="rounded-circle float-end text-white f-s-20">
                            {{--                        <i class="bx bx-plus-circle"></i>--}}
                            <i class="mdi mdi-page-previous-outline"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}" method="post">
                            @csrf
                            @if(isset($permission))
                                @method('put')
                            @endif
                            <div class="mt-2 select2-div">
                                <label for="">Permission Category</label>
                                <select name="permission_category_id" class="form-control select2" required data-placeholder="<-- Select a Permission Category -->" id="">
                                    <option value=""></option>
                                    @foreach($permissionCategories as $permissionCategory)
                                        <option value="{{ $permissionCategory->id }}" {{ isset($permission) && $permission->permission_category_id == $permissionCategory->id ? 'selected' : '' }}>{{ $permissionCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-2">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ isset($permission) ? $permission->title : '' }}" />
                            </div>

                            <div class="mt-2">
                                <label for="">Is Published</label>
                                <div class="material-switch">
                                    <input id="someSwitchOptionInfo" name="status" class="form-check-input success check-outline outline-success" type="checkbox" {{ isset($permission) && $permission->status == 0 ? '' : 'checked' }}>
                                    <label for="someSwitchOptionInfo" class="label-info"></label>
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-success btn-sm float-end" value="{{ isset($permission) ? 'Update' : 'Create' }} Permission" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('style')

@endpush

@push('script')
@include('backend.includes.asset.plugin-files.select-2')
@endpush