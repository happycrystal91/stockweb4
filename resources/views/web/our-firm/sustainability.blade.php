@extends('layouts.app')
@section('title', 'Sustainability | Our Firm | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.sustainability')
])
@endcomponent

@endsection
