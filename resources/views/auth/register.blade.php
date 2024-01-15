@extends('layouts.contact')

@section('title', 'Register')

@section('content')

<div class="row">
    <div class="small-8 small-offset-2 columns">
        <div class="panel">
            <h2 class="text-center">Register</h2>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="row collapse{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row collapse{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row collapse{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fa fa-lock"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row collapse{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fa fa-lock"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 small-offset-4 columns">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
