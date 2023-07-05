@extends('layouts.app')
@section('title', 'What We Look For | Careers | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.what we look for')
])
@endcomponent

@endsection
