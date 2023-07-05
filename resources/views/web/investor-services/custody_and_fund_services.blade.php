@extends('layouts.app')
@section('title', 'Custody & Fund Services | Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.custody & fund services')
])
@endcomponent

@endsection
