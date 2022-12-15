@extends('site.master')
@section('content')
<h2>Login</h2>

   <form action="/login" method="post">
      <input type="text" name="email" value="xandercar@hotmail.com">
      <input type="text" name="password" value="123">
      <button type="submit">Login</button>
   </form>

   @section('scripts')
       <script src=""></script>
   @endsection

@stop

