@extends('layouts.contact')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="large-8 large-offset-2 columns">
            <div class="signup-panel">
                <p class="welcome">OBCT Admin Panel</p>
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="row collapse{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="small-10  columns">
                            <input type="text" name="email" placeholder="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row collapse">
                        <div class="small-2 columns ">
                            <span class="prefix"><i class="fa fa-lock"></i></span>
                        </div>
                        <div class="small-10 columns ">
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" placeholder="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row collapse">
                        <div class="small-6 small-offset-2 columns">
                            <div class="checkbox">
                                <input id="remember" name="remember" type="checkbox"><label for="remember">Checkbox 1</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button">
                        <i class="fa fa-sign-in"></i>Login
                    </button>
                </form>

                <p class="text-center">Forgot Password? <a href="{{ url('/password/reset') }}">Click Here</a></p>
            </div>
        </div>
    </div>


@endsection
