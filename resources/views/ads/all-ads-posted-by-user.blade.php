@extends('layouts.app')
@section('content')
@livewire('ads.all-ads-posted-by-user', ['user_id'=>$user_id])
@endsection