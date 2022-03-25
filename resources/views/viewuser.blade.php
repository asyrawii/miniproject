{{View:: make('title')}}
{{View:: make('menu')}}
<!-- <div>
    <table>
        <caption>List of User</caption>
        <thead>
            <th>#</th>
            <th>Full name</th>
            <th>Email address</th>
            <th>Password</th>
            <th>Created at</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th>{{ $loop->iteration}}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->password}}</tdth>
                <td>{{ date('D,d F Y',strtotime($user->created_at))}}</td>
                <td>
                    <a href="/editmyuser?rid={{ $user->id }}">Edit</a>
                    <a href="/userdelete?rid={{ $user->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $users->links() }}
    </div>
</div> -->
<style>
.h-5 {
height: 1em;
}

.flex {
text-align: center;
width: 100%;
}

.leading-5{
padding: 0.7em;
}
</style>
<script>
    console.log('Log start');
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
    console.log('Log end');
</script>


<div class="container">
<h2>List of Users</h2>
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fullname</th>
              <th scope="col">Email Address</th>
              <th scope="col">Password</th>
              <th scope="col">Created at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $user->name}}</td>
              <td>{{ $user->email}}</td>
              <td>{{ $user->password}}</td>
              <td>{{ date('D,d F Y',strtotime($user->created_at))}}</td>
              <td>
                    <a href="/editmyuser?rid={{ $user->id }}"><img src="/bootstrap/images/edit.svg" class="bi me-2" width="32" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img></a>
                    <a href="/userdelete?rid={{ $user->id }}"><img src="/bootstrap/images/delete.svg" class="bi me-2" width="32" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img></a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- <div class="d-flex justify-content-center">
        {{ $users->links() }}
        <div class="pagination">
              {{ $users->appends(['search' => Request::get('search')])->links() }}
        </div>

        </div> -->
        <div class="d-flex justify-content-center">
        {{ $users->appends(['search' => Request::get('search')])->links('vendor.pagination.bootstrap-4') }}
      </div>
      </div>
</div>
{{View:: make('footer')}}