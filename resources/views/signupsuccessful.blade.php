@extends('layout')

@section('content')
    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label" for="email">@lang('signup.email')</label>

                <div class="control">
                    <input class="input @error('email') is-danger @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                @error('email')
                <p class="help is-danger">{{ $errors->first('email') }}</p>
                @enderror
            </div>
        </div>
@endsection
