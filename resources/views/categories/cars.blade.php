@extends('layouts.app')
@section('content')
    @livewire('categories.cars',['category'=>$category])
@endsection