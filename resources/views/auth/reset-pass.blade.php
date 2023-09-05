@extends('auth.layout.main')

@section('title', 'reset')

@section('container')
<div class="box-login">
    @if (session()->has('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <h1>Forgot <span>password?</span></h1>
        <p>please enter your email address</p>
        <div class="login-d">
            <input type="text" class="login-e" placeholder="Email" required name="email">
            <i class='bx bxs-envelope' ></i>
        </div>
        <button type="submit" class="btn-form">Reset password</button>
    </form>
</div>
@endsection
