@extends('layouts.app')
@section('title', 'Total Rewards | Careers | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.total rewards')
])
@endcomponent

@endsection
