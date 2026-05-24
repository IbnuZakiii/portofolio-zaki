{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.project')
    @include('partials.sertificate') 
    @include('partials.contact')
@endsection

@push('styles')
<style>
    /* Additional custom styles just for welcome page */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush