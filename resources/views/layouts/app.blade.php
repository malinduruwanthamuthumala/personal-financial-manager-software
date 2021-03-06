@extends('admin-lte::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('admin-lte::layouts.content-wrapper.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATOR</li>
  <li class="active">
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>Home</span>
    </a>
    <a href="/getproduct">
      <i class="fa fa-home"></i>
      <span>products</span>
    </a>
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>purchase History</span>
    </a>
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>invoice</span>
    </a>
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>reports</span>
    </a>
    <a href="/investment">
      <i class="fa fa-home"></i>
      <span>Investments</span>
    </a>
  </li>
</ul>
@endsection
