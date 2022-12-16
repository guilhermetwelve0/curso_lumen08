@extends('site.master')
@section('content')
<h2>Login</h2>

   <form>
      <input type="text" name="email" value="xandercar@hotmail.com">
      <input type="text" name="password" value="123">
      <button id="btn-login">Login</button>
   </form>

   @section('scripts')
       <script src="/dist/login.js"></script>
   @endsection

@stop

