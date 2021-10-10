@extends('layouts.app')
@section('content')
    @livewire('categories.others', ['category'=>$category])
@endsection