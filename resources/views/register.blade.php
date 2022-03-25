{{View:: make('titleguest')}}
<!-- <div>
<form action="register" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Full name</label>
        <input type="text" name="fullname" id="exampleInputName1">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" id="exampleInputEmail1" aria-describeby="emailHelp">
        <div id="emailHelp">We'll never share your email to anyone else.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" id="exampleInputPassword1">
    </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="button" onclick="javascript:history.back()">Cancel</button>
    </form>
</div> -->
<!-- ------------------------------------------------------------------------- -->
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
  <form  action="register" method="post">
    @csrf
    <img class="mb-4" src="/bootstrap/images/icon.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="exampleInputName1" placeholder="fullname" name="fullname">
      <label for="exampleInputName1">Full name</label>
    </div>
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
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <button class="w-100 btn btn-lg btn-secondary my-2" type="button" onclick="javascript:history.back()">Cancel</button>
    <!-- <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a> -->
  </form>
</main>
</div>


{{View:: make('footer')}}