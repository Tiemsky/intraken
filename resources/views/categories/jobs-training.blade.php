@extends('layouts.app')
@section('content')
    @livewire('categories.jobs-training', ['category'=>$category])
@endsection