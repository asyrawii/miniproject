<script>
    console.log('Log start');
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
    console.log('Log end');
</script>
<!-- <div class="d-flex justify-content-center">
logged in as {{session()->get('user')->email}}
<a href="/logout">Log out</a> | <a href="/editmyuser?rid={{session()->get('user')->id}}">Edit</a>
</div> -->
<div class="d-flex justify-content-center">
Welcome {{session()->get('user')->name}}
</div>

