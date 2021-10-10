@extends('layouts.app')
@section('content')
    @livewire('categories.furniture',['category'=>$category])
@endsection