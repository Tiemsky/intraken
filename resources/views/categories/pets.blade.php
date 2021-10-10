@extends('layouts.app')
@section('content')
    @livewire('categories.pets', ['category'=>$category])
@endsection