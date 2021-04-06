@extends('layout')

@section('content')

    <h1 class="title" for="description">@lang('status.description')</h1>

    @if (Auth::user()->participant()->first() != null)
        @if (Auth::user()->participant()->first()->status == 0)
            {{"Your trial application is being processed."}}
        @endif

        @if (Auth::user()->participant()->first()->status == 1)
            {{"Your trial application has been approved. We will contact you in the coming days."}}
        @endif

        @if (Auth::user()->participant()->first()->status == 2)
            {{"Your trial application has been denied. You won't be eligible for the trail."}}
        @endif
    @else
        <p>{{"You haven't signed up for the trail."}}</p>
    @endif
@endsection
