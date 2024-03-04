@extends('layouts.admin')
@section('page_name')
    {{ __('Service List Edit') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Edit Service list') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.list.update',$service_list_info->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Service Name') }}</label>
                            <input type="text" name="service_name" class="form-control" value="{{ $service_list_info->service_name }}">
                        </div>
                        @error('service_name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            <a href="{{ route('service.list') }}" class="btn btn-light"><i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp;{{ __('Back') }}</a>
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