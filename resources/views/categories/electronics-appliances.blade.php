@extends('layouts.app')
@section('content')
    @livewire('categories.electronics-appliances',['category'=>$category])
@endsection