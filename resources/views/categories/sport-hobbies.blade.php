@extends('layouts.app')
@section('content')
    @livewire('categories.sport-hobbies', ['category'=>$category])
@endsection