@extends('login-page.layout.main')

@section('title', 'login')

@section('container')
<div class="box-login">
    <form action="#">
        <h1>Log <span>In</span></h1>
        <div class="login-d">
            <input type="text" class="login-e" placeholder="Email" required name="email">
            <i class='bx bxs-envelope' ></i>
        </div>
        <div class="login-d">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="remember-forgot">
            <label for="remember"><input type="checkbox" id="remember"> Remember me</label>
            <a href="{{ route('password.request') }}">forgot password</a>
        </div>
        <button type="submit" class="btn-form">Login</button>
    </form>
</div>
@endsection
