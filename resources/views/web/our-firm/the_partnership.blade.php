@extends('layouts.app')
@section('title', 'The Partnership | Our Firm | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.the partnership')
])
@endcomponent

@endsection
