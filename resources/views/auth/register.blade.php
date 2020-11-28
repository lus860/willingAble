{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('layouts.auth')
@section('form_action', route('register'))
@section('content')
    <div class="auth-title">{{ __('Register') }}</div>
    <div class="form-group">
        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="auth-firstname" placeholder="Firstname" value="{{ old('firstname') }}">
        @error('firstname')
        <small id="emailHelp" class="form-text">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="auth-lastname" placeholder="Lastname" value="{{ old('lastname') }}">
        @error('lastname')
        <small id="emailHelp" class="form-text">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="auth-email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
        <small id="emailHelp" class="form-text">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" id="auth-password" placeholder="Password">
        @error('password')
        <small id="emailHelp" class="form-text">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" name="password_confirmation"  class="form-control @error('password') is-invalid @enderror" id="auth-password" placeholder="Confirm Password" required autocomplete="new-password">
        @error('password')
        <small id="emailHelp" class="form-text">{{ $message }}</small>
        @enderror
    </div>
    <div class="auth-submit">
        <div class="auth-right">
            <button type="submit" class="btn btn-astudio">{{ __('Register') }}
            </button>
        </div>
    </div>
@endsection
