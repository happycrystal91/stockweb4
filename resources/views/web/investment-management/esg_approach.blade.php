@extends('layouts.app')
@section('title', 'ESG Approach | Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.ESG approach')
])
@endcomponent

@endsection
