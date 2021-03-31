@extends('layout')

@section('content')
    <form method="POST" action="{{route('signup.store')}}">
        @csrf

        <div class="field">
            <label class="label" for="description">@lang('signup.description')</label>

            <div class="control">
                <textarea class="textarea @error('description') is-danger @enderror" id="description" name="description">{{ old('description') }}</textarea>
            </div>

            @error('description')
            <p class="help is-danger">{{ $errors->first('description') }}</p>
            @enderror
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">@lang('signup.button')</button>
            </div>
        </div>
    </form>
@endsection
