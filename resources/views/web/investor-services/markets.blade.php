@extends('layouts.app')
@section('title', 'Markets | Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.markets')
])
@endcomponent

@endsection
