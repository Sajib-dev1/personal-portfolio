@extends('layouts.admin')
@section('page_name')
    {{ __('Service List') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Servicr List') }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderd">
                        <tr>
                            <th>{{ __('SL') }}</th>
                            <th>{{ __('Service Name') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        @foreach ( $service_listes as $sl=>$service_liste )
                            <tr>
                                <td>{{ $sl+1 }}</td>
                                <td>{{ $service_liste->service_name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('service.list.edit',$service_liste->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('service.list.delete',$service_liste->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
                    <h3>{{ __('Add Service') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.list.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Add Service Name') }}</label>
                            <input type="text" name="service_name" class="form-control">
                        </div>
                        @error('service_name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
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
@endsection