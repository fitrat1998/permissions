@extends('admin.layouts.app')

@section('content')

<div class="form-container">
    <h1>Create User</h1>

    <!-- Validation Errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname') }}" required>
            @if($errors->has('fullname'))
                <div class="alert alert-danger">{{ $errors->first('fullname') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
            @if($errors->has('photo'))
                <div class="alert alert-danger">{{ $errors->first('photo') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
            @if($errors->has('phone'))
                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @if($errors->has('password'))
                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            @if($errors->has('password_confirmation'))
                <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="pin" class="form-label">Pin</label>
            <input type="number" class="form-control" id="pin" name="pin" value="{{ old('pin') }}">
            @if($errors->has('pin'))
                <div class="alert alert-danger">{{ $errors->first('pin') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="id_series" class="form-label">ID Series</label>
            <input type="text" class="form-control" id="id_series" name="id_series" value="{{ old('id_series') }}">
            @if($errors->has('id_series'))
                <div class="alert alert-danger">{{ $errors->first('id_series') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
            @if($errors->has('country'))
                <div class="alert alert-danger">{{ $errors->first('country') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="verified" class="form-label">Verified</label>
            <select class="form-control" id="verified" name="verified">
                <option value="" selected>Select Verification Status</option>
                <option value="yes" {{ old('verified') == 'yes' ? 'selected' : '' }}>Yes</option>
                <option value="no" {{ old('verified') == 'no' ? 'selected' : '' }}>No</option>
            </select>
            @if($errors->has('verified'))
                <div class="alert alert-danger">{{ $errors->first('verified') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
