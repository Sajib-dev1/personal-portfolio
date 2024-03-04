@extends('layouts.admin')
@section('page_name')
    {{ __('Service') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-borderd">
                        <tr>
                            <th>{{ __('SL') }}</th>
                            <th>{{ __('Icon') }}</th>
                            <th>{{ __('Service Name') }}</th>
                            <th>{{ __('Service short Description') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        @foreach ( $services as $sl=>$service )
                            <tr>
                                <td>{{ $sl+1 }}</td>
                                <td>
                                    <img width="70" src="{{ asset('uploads/service') }}/{{ $service->icon }}" alt="">
                                </td>
                                <td>{{ $service->service_name }}</td>
                                <td>{{ $service->service_short_description }}</td>
                                <td class="toogle_btn">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" {{ $service->status == 1?'checked':'' }} class="status" data-id="{{ $service->id }}" data-toggle="toggle" value="{{ $service->status }}">
                                        </label>
                                      </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('service.edit',$service->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('service.delete',$service->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
                    <h3>{{ __('Add New Service') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('service name') }}</label>
                            <input type="text" name="service_name" class="form-control">
                        </div>
                        @error('service_name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('service short description') }}</label>
                            <textarea name="service_short_description" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        @error('service_short_description')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('service Icon') }}</label>
                            <input type="file" name="icon" class="form-control">
                        </div>
                        @error('icon')
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
<script>
    $('.status').change(function(){
        if($(this).val() != 1){
            $(this).attr('value',1);
        }
        else{
            $(this).attr('value',0);
        }
        var service_id = $(this).attr('data-id');
        var status = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: '/getservicestatus',
            type: "POST",
            data: { 'service_id':service_id,'status':status },
            success: function( data ) {
            }
        });
    })
</script>
@endsection