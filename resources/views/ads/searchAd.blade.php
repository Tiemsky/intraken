@extends('layouts.app')
@section('content')
@livewire('ads.search-ads', ['ads' => $ads])
@endsection
