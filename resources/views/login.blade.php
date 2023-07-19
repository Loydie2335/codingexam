@extends('layouts.guest')
@section('content')


    <div class="container w-50 mt-5">
      @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <div class="card">



            <div class="card-header">
                <h3>Login</h3>
            </div>
            <div class="card-body ">
                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="row">

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
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="alert alert-danger mt-1 py-1">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                    <div class="row float-end mt-3 px-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                </form>
            </div>
        </div>



    </div>
@endsection
