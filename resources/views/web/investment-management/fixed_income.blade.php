@extends('layouts.app')
@section('title', 'Fixed Income | Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.fixed income')
])
@endcomponent

@endsection
