@extends('layout')

@section('content')
    @if (Auth::user()->participant()->first() == null)
        <form method="POST" action="{{route('signup.store')}}">
            @csrf

            <h1 class="title" for="description">@lang('signup.title')</h1>
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
    @else
        <h1 class="title">{{"You have already signed up for the trail."}}</h1>
    @endif
@endsection
