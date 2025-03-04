@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update User Settings</h4>

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="dasboard_header">
                                <div class="dasboard_header_img">
                                    <img src="{{ asset(auth()->user()->avatar) }}" alt="user" class="img-fluid w-100">
                                    <label for="upload"><i class="fa fa-camera fa-2x" aria-hidden="true"></i></label>
                                    <input type="file" id="upload" name="avatar" hidden="" onchange="previewImage(event)">
                                </div>

                            </div>

                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" class="form-control" name="surname" value="{{ auth()->user()->surname }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Password</h4>

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="form-control" name="current_password">
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset(auth()->user()->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
