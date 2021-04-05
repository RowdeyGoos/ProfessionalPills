@extends('layout')

@section('content')

    <label class="label" for="description">@lang('status.description')</label>
    @if (Auth::user()->participant()->first()->status == 0)
        {{"Your application is being processed."}}
    @endif

    @if (Auth::user()->participant()->first()->status == 1)
        {{"Your application has been approved. We will contact you in the coming days."}}
    @endif

    @if (Auth::user()->participant()->first()->status == 2)
        {{"Your application has been denied. You won't be eligble for the trail."}}
    @endif
@endsection
