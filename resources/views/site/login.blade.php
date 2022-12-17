@extends('site.master')
@section('content')
<h2>Login</h2>

@if (Auth::user())
<h3>Já está logado</h3>
@else
<div id="messages"></div>

<form>
    <input type="text" name="email" value="torrey86@yahoo.com">
    <input type="password" name="password" value="123">
    <button id="btn-login">Login</button>
</form>
@endif



@section('scripts')
<script src="/dist/login.js"></script>
@endsection

@stop
