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
