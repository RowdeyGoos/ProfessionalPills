@extends('layout')

@section('content')

    <form method="POST" action="{{route('admin.users.delete')}}">

        @method('delete')
        @csrf
        <div class="column">
            <div class="field">
                <label class="label" for="insertion">Input user you want to delete</label>

                <div class="control">
                    <input class="input @error('insertion') is-danger @enderror" type="text" id="id" name="id" value="{{ old('insertion') }}">
                </div>

                @error('insertion')
                <p class="help is-danger">{{ $errors->first('insertion') }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Delete</button>
            </div>
        </div>
    </form>

    <div class="box content" >
        <h1 class="title" >@lang('admin.header.stats')</h1>
        <p>@lang('admin.hospital_count')</p>
        <p>@lang('admin.participant_count', ['participant' => App\Models\Participant::count()])</p>

        <h2>@lang('admin.log')</h2>
        <p style="height:1000px; overflow: scroll;">{{ File::get(storage_path('logs/laravel.log'))}} </p>
    </div>
@endsection
