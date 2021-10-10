@extends('layouts.app')
@section('content')
@livewire('ads.show-ad',['slug' => $slug])
@endsection