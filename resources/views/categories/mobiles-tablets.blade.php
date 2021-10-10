@extends('layouts.app')
@section('content')
    @livewire('categories.mobiles-tablets',['category'=>$category])
@endsection