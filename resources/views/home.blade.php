@extends('header')
@section('login')
<!-- <form action="login" method="post">
    @csrf
   
    <div>
        <label for="inputEmail">Email Address</label>
        <input type="email" name="email">
    </div>

    <div>
        <label for="inputPassword">Password</label>
        <input type="password" name="password">
    </div>

    <button type="submit">Login</button>
    <button type="button" onclick="window.location.href='/register'">Register</button>

</form> -->
<script>
console.log('Log start');
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
    console.log('Log end');
  </script>
  <div class="b-example-divider"></div>
<div class="text-center">
<main class="form-signin">
  <form  action="login" method="post">
    @csrf
    <img class="mb-4" src="/bootstrap/images/icon.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Sign In</h1>
    <div class="form-floating">
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com" name="email">
      <label for="exampleInputEmail1">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      <label for="exampleInputPassword1">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <button class="w-100 btn btn-lg btn-secondary my-2" type="button" onclick="window.location.href='/register'">Register</button>
    <!-- <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a> -->
  </form>
</main>
</div>

@endsection