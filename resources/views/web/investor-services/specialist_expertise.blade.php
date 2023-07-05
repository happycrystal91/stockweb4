@extends('layouts.app')
@section('title', 'Specialist Expertise | Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.specialist expertise')
])
@endcomponent

@endsection
