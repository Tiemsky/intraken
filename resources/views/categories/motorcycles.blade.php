@extends('layouts.app')
@section('content')
    @livewire('categories.motorcycles', ['category'=>$category])
@endsection