@extends('layouts.app')
@section('title', 'Life At Vanward | Careers | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.life at vanward')
])
@endcomponent

@endsection
