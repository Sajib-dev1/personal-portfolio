@extends('layouts.admin')
@section('page_name')
    {{ __('Profile') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Update Information') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Password') }}</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        @error('password')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Image') }}</label>
                            <input type="file" name="image" class="form-control"  onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        @error('image')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <img width="200" src="{{ asset('uploads/admin') }}/{{ Auth::user()->photo }}" id="photo" alt="{{ Auth::user()->logo }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Update Logo') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.logo.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Logo') }}</label>
                            <input type="file" name="logo" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Logo_Text') }}</label>
                            <input type="file" name="logo_text" class="form-control"  onchange="document.getElementById('logo_text').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        @error('logo')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mb-3">
                            <img width="100" src="{{ asset('uploads/admin') }}/{{ Auth::user()->logo }}" id="blah" alt="{{ Auth::user()->logo }}">
                            <img width="100" src="{{ asset('uploads/admin') }}/{{ Auth::user()->logo_text }}" id="logo_text" alt="{{ Auth::user()->logo_text }}">
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