@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>My work list</h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderd">
                        <tr>
                            <th>Clients</th>
                            <th>Projects</th>
                            <th>Awards</th>
                            <th>Experience</th>
                        </tr>
                        @foreach ($myworks as $work ) 
                            <tr>
                                <td>{{ $work->clients }}</td>
                                <td>{{ $work->projects }}</td>
                                <td>{{ $work->awards }}</td>
                                <td>{{ $work->experience }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('My works') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('mywork.update',$works->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('My Clients') }}</label>
                            <input type="number" name="clients" class="form-control" value="{{ $works->clients }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('My Projects') }}</label>
                            <input type="number" name="projects" class="form-control" value="{{ $works->projects }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('My Awards') }}</label>
                            <input type="number" name="awards" class="form-control" value="{{ $works->awards }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('My Experience') }}</label>
                            <input type="number" name="experience" class="form-control" value="{{ $works->experience }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
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