@extends('layouts.app')
@section('title', 'Philanthropy | Our Firm | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.philanthropy')
])
@endcomponent

@endsection
