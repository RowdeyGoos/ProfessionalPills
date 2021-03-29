@extends('layout')

@section('content')
    <form method="POST">
        @csrf

        <div class="field">
            <label class="label" for="email">@lang('auth.login.email')</label>

            <div class="control">
                <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" autofocus required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">@lang('auth.login.password')</label>

            <div class="control">
                <input class="input" type="password" id="password" name="password" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">@lang('auth.login.button')</button>
            </div>
        </div>
    </form
@endsection
