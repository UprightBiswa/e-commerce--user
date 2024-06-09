@extends('user.layout.app')

@section('content')
    <main>
        @include('user.homeLayouts.hero')
        @include('user.homeLayouts.maketrip')
        @include('user.homeLayouts.offerd')
        @include('user.homeLayouts.aboutUs')
        @include('user.homeLayouts.services')
        @include('user.homeLayouts.testomonial')
        @include('user.homeLayouts.blog')
        @include('user.homeLayouts.info')
    </main>
@endsection
