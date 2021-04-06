@extends('layout')

@section('content')
    @auth
        <h1 class="title">@lang('home.header_auth', ['user.firstname' => Auth::user()->firstname])</h1>
        <p>@lang('home.description_auth')</p>
    @else
        <h1 class="title">@lang('home.header_guest')</h1>
        <p>@lang('home.description')</p>
    @endauth
@endsection
