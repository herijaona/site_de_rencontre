@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-3">
            <h3>Profile Picture</h3>
            <img src="{{ asset('avatars/'. Auth::user()->avatar) }}" width="200px" class="d-block" />
            <form method="post" action="user_avatar/update" enctype="multipart/form-data" class="mt-4">
                <h4>Update Profile Picture</h4>
                @csrf
                <div class="form-group">
                    <label for="avatar">Upload a picture</label>
                    <input type="file" class="form-control-file" id="avatar" name="avatar" required />
                </div>
                <input type="submit" class="btn btn-primary" value="Update" />
            </form>
        </div>
        <div class="col-md-8">
            <p>
                First Name: {{ Auth::user()->first_name }}
            </p>
            <p>
                Last Name: {{ Auth::user()->last_name }}
            </p>
            <p>
                Email: {{ Auth::user()->email }}
            </p>
            <p>
                Sex: {{ Auth::user()->sex }}
            </p>
            <p>
                Age: {{ Auth::user()->age }}
            </p>
        </div>
    </div>
</div>
@endsection
