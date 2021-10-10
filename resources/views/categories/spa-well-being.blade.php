@extends('layouts.app')
@section('content')
    @livewire('categories.spa-well-being', ['category'=>$category])
@endsection