@extends('layouts.app')
@section('content')
    @livewire('categories.services', ['category'=>$category])
@endsection