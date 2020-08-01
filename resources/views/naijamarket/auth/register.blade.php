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
            <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('register') }}">
                @csrf
                <ul style="margin-top: -150px;" class="ps-tab-list">
                    <li class="active"><a href="{{route('register')}}">Register</a></li>
                </ul>
                <div class="ps-tabs">
                    <div class="ps-tab active" id="register">
                        <div class="ps-form__content">
                            <h5>Register An Account</h5>
                            <div class="form-group">    
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    
                            <div class="form-group">    
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    
                            <div class="form-group">    
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    
                            <div class="form-group">    
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group submtit">
                                <button type="submit" class="ps-btn ps-btn--fullwidth">Register</button>
                            </div>
                        </div>
                        <div class="ps-form__footer">
                            <p>Already have an account?: <a href="{{route('login')}}">Login</a></p>
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


