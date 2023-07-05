@extends('layouts.app')
@section('title', 'Public Equity | Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.public equity')
])
@endcomponent

@endsection
