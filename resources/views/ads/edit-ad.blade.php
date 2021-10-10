@extends('layouts.home')
@section('content')
@livewire('ads.edit-ad',['ad'=>$ad])
@endsection
