@extends('layouts.front.master')

@push('css')

@endpush

@section('content')
<div class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>My account</li>
            </ul>
        </div>
    </div>
    <div class="ps-my-account">
        <div class="container">
            <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('login') }}">
                @csrf
                <ul style="margin-top: -150px;" class="ps-tab-list">
                    <li class="active"><a href="{{route('login')}}">Login</a></li>
                </ul>
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                            <h5>Log In Your Account</h5>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-forgot">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot?</a>
                                @endif
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="ps-checkbox">
                                    <input class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Rememeber me</label>
                                </div>
                            </div>
                            <div class="form-group submtit">
                                <button type="submit" class="ps-btn ps-btn--fullwidth">Login</button>
                            </div>
                        </div>
                        <div class="ps-form__footer">
                            <p>Do not have an account?: <a href="{{route('register')}}">Register</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush

