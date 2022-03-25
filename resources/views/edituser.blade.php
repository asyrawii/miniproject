{{View:: make('title')}}
<script>
    console.log('Log start');
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
    console.log('Log end');
</script>
<!-- 
<div class="b-example-divider"></div>
<div class="d-flex justify-content-center">
<form action="useredit?rid={{ Request::get('rid') }}" method="post">
@csrf
<div class="mb-3">
    <label for="exampleInputName1" class="form-label">Full name</label>
    <input maxlength="100" value="{{ $users->name }}" type="text" name="fullname" id="exampleInputName1">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input maxlength="100" value="{{$users->email}}" type="email" name="email" id="exampleInputEmail1">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input maxlength="50" value="{{$users->password}}" type="password" name="password" id="exampleInputPassword1">
</div>
<button type="submit" class="btn btn-primary">Update</button>
<button type="button" class="btn btn-secondary my-2" onclick="javascript:history.back()">Cancel</button>
</form>
</div> -->


<div class="b-example-divider"></div>
  <div class="d-flex justify-content-center">
  <h3>Update profile</h3>
</div>
<div class="b-example-divider"></div>
      <div class="form-signin">
        <form class="row g-3" action="useredit?rid={{ Request::get('rid') }}" method="post">
            @csrf
          <div class="row-md-4">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="fullname" value="{{ $users->name }}" required>
          </div>
          <div class="row-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $users->email }}" required>
          </div>
          <div class="row-md-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="input-group has-validation">
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ $users->password }}" required>
            </div>
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-secondary my-2" onclick="javascript:history.back()">Cancel</button>
          </div>
        </form>
        </div>
{{View:: make('footer')}}