@extends('layouts.guest')
@section('content')
<div class="container">


    <div class="card mt-5">
        <div class="card-header">
            <h3>Register</h3>
        </div>
        <div class="card-body ">
            <form action="{{ route('users.create') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col">
                        <label>Full Name</label>
                        <input type="text" name="full_name"
                            class="form-control @error('full_name') is-invalid @enderror"
                            value="{{ old('full_name') }}">
                        @error('full_name')
                            <p class="alert alert-danger mt-1 py-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Email Address</label>
                        <input type="email" name="email_address"
                            class="form-control @error('email_address') is-invalid @enderror"
                            value="{{ old('email_address') }}">
                        @error('email_address')
                            <div class="alert alert-danger mt-1 py-1">{{ $message }}</div>
                        @enderror
                    </div>


                </div>

                <div class="row">

                    <div class="col">
                        <label>Date of Birth</label>
                        <input type="date" name="date_of_birth"
                            class="form-control @error('date_of_birth') is-invalid @enderror"
                            value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                            <div class="alert alert-danger mt-1 py-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger mt-1 py-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-1 py-1">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="row float-end mt-3 px-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

            </form>
        </div>
    </div>



</div>
@endsection
