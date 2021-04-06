@extends('layout')

@section('content')

    <div class="box content" >
        <h1 class="title" >@lang('admin.header.stats')</h1>
        <p>@lang('admin.hospital_count')</p>
        <p>@lang('admin.participant_count', ['participant' => App\Models\Participant::count()])</p>

        <h2>@lang('admin.log')</h2>
        <p style="height:1000px; overflow: scroll;">{{ File::get(storage_path('logs/laravel.log'))}} </p>
    </div>
@endsection


{{--<h1 class="title is-4">{{ $boat->name }}</h1>--}}
{{--@if ($boat->description != null)--}}
{{--    <p style="white-space: pre-wrap;">{{ $boat->description }}</p>--}}
{{--@else--}}
{{--    <p><i>@lang('boats.show.description_empty')</i></p>--}}
{{--@endif--}}
