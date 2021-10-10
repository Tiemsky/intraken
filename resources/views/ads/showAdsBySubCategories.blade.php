@extends('layouts.app')
@section('content')
@livewire('ads.show-ads-by-sub-categories',['categorySlug' => $categorySlug, 'subCategorySlug'=>$subCategorySlug])
@endsection