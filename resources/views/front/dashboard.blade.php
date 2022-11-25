@extends('front.master')
@section('content')
<div class="bg-light">
    <h1 class="text-center">Dashboard</h1>
        <h5>Hello</h5>
    <h1><span style="color:#050505;">{{ Auth::user()->name }}</span></h1>
</div>
@endsection
