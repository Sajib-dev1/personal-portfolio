@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Claints Message') }}</h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderd">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>message</th>
                            <th>send offer</th>
                            <th>delete</th>
                        </tr>
                        @foreach ( $contacts as $sl=>$contact )  
                            <tr>
                                <td>{{ $sl+1 }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->message }}</td>
                                <td><a href="#" class="btn btn-success btn-sm">Send offer</a></td>
                                <td>
                                    <a href="{{ route('contact.delete',$contact->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script>
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