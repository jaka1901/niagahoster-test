@extends('layouts/landing-page')
@section('content')

<div class="container">
	@include('landing-page/parts/header')
	@include('landing-page/parts/packages')
	@include('landing-page/parts/content')
</div>

@include('landing-page/parts/footer')

@endsection