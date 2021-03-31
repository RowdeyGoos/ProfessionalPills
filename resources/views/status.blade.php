@extends('layout')

@section('content')
    {{Auth::user()->participant()->first()->status}}
@endsection
