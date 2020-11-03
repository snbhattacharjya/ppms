@extends('layouts.app')

@section('content')
    @include('dashboards.'.strtolower(Auth::user()->scope->name))
@endsection
