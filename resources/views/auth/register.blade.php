@extends('layout')

@section('content')

    <form method="POST">
        @csrf

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label" for="name">@lang('auth.register.name')</label>

                    <div class="control">
                        <input class="input @error('name') is-danger @enderror" type="text" id="name" name="name" value="{{ old('name') }}" autofocus required>
                    </div>

                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
            </div>
        </div>


        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label" for="email">@lang('auth.register.email')</label>

                    <div class="control">
                        <input class="input @error('email') is-danger @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    @error('email')
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label" for="password">@lang('auth.register.password')</label>

                    <div class="control">
                        <input class="input @error('password') is-danger @enderror" type="password" id="password" name="password" required>
                    </div>

                    @error('password')
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @enderror
                </div>
            </div>

            <div class="column">
                <div class="field">
                    <label class="label" for="password_confirmation">@lang('auth.register.password_confirmation')</label>

                    <div class="control">
                        <input class="input @error('password') is-danger @enderror" type="password" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">@lang('auth.register.button')</button>
            </div>
        </div>
    </form>
@endsection
