@extends('layouts.app')
@section('content')
    @livewire('categories.jewelry', ['category'=>$category])
@endsection