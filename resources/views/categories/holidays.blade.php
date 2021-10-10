@extends('layouts.app')
@section('content')
    @livewire('categories.holidays', ['category'=>$category])
@endsection