@extends('layouts.app')
@section('content')
    @livewire('categories.fashion-clothes', ['category'=>$category])
@endsection