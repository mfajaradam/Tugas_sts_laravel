@extends('Layout')

@section('content')
    <main>
        @include('Header')
        @include('About')
        @include('Info')
        @include('Project')
        @include('Contact')
        @include('Footer')
    </main>

    {{-- @include('Footer') --}}
@endsection
