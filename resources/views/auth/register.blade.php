@extends('auth.layout.main')

@section('title', 'register')

@section('container')
<div class="box-login">
    <form action="{{ route('register.store') }}" method="POST" class="needs-validation">
        @csrf
        <h1>Reg<span>ister</span></h1>
        <div class="login-d">
            <input class="@error('name')
            is-invalid
            @enderror" type="text" name="name" placeholder="Username" required value="{{ old('name') }}">
            <i class='bx bxs-user'></i>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="login-d">
            <input class="@error('email')
            is-invalid
            @enderror" type="text" class="login-e" placeholder="Email" required name="email" value="{{ old('email') }}">
            <i class='bx bxs-envelope' ></i>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="login-d">
            <input class="@error('password')
            is-invalid
            @enderror" type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="login-d">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        {{-- <div class="remember-forgot">
            <label for="remember"><input type="checkbox" id="remember" name="remember"> Remember me</label>
            <a href="">forgot password</a>
        </div> --}}
        <button type="submit" class="btn-form">Register</button>
    </form>
</div>
@endsection
