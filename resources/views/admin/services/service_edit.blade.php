@extends('layouts.admin')
@section('page_name')
    {{ __('Service Edit') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Service Edit') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.update',$service_info->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('service name') }}</label>
                            <input type="text" name="service_name" class="form-control" value="{{ $service_info->service_name }}">
                        </div>
                        @error('service_name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('service short description') }}</label>
                            <textarea name="service_short_description" class="form-control" id="" cols="30" rows="5">{{ $service_info->service_short_description }}</textarea>
                        </div>
                        @error('service_short_description')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('service Icon') }}</label>
                            <input type="file" name="icon" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        @error('icon')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <img src="{{ asset('uploads/service') }}/{{ $service_info->icon }}" width="100" id="blah" alt="{{ $service_info->icon }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            <a href="{{ route('services') }}" class="btn btn-light"><i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp;{{ __('Back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script>
        @if(Session::has('update'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.success("{{ session('update') }}");
        @endif
    </script>
@endsection