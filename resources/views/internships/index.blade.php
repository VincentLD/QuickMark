@extends('layouts.layout')

@section('content')


    @unless(isset($editStage))
        @include('internships._create')
    @else
        @include('internships._edit')
    @endunless

    @include('internships._liste')

@endsection
