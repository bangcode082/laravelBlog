@extends('layouts.admin')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session('success')}} {{ Auth::user()->name }}</div>
@endif

@include('layouts.partial._menu-header')



@endsection