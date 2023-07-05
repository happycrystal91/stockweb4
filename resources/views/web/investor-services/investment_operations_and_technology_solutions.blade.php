@extends('layouts.app')
@section('title', 'Investment Operations & Technology Solutions | Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.investment operations & technology solutions')
])
@endcomponent

@endsection
