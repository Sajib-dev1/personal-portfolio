@extends('layouts.admin')
@section('page_name')
    {{ __('Application') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Model Service List') }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderd">
                        <tr>
                            <th>{{ __('SL') }}</th>
                            <th>{{ __('image') }}</th>
                            <th>{{ __('Service Name') }}</th>
                            <th>{{ __('Service Description') }}</th>
                            <th>{{ __('service link') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        @foreach ( $model_services as $sl=>$model_service )
                            <tr>
                                <td>{{ $sl+1 }}</td>
                                <td>
                                    <img width="70" src="{{ asset('uploads/service') }}/{{ $model_service->image }}" alt="">
                                </td>
                                <td>{{ $model_service->service_name }}</td>
                                <td>{{ $model_service->service_description }}</td>
                                <td>{{ $model_service->service_link }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('model.service.delete',$model_service->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Add Model Service') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('model.service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Service Name') }}</label>
                            <input type="text" name="service_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Service Description') }}</label>
                            <textarea name="service_description" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Service Link') }}</label>
                            <input type="text" name="service_link" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Service List') }}</label>
                            <select class="js-example-basic-multiple" name="service_list[]" multiple="multiple">
                                @foreach ( $service_listes as $service_liste )
                                <option value="{{ $service_liste->id }}">{{ $service_liste->service_name }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Service image') }}</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script>
        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('delete'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.error("{{ session('delete') }}");
        @endif
    </script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>
@endsection