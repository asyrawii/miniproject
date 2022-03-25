@if(session()->has('user'))
        {{View:: make('title')}}
    @else
        {{View:: make('titleguest')}}
    @endif
{{View:: make('menu')}}
<div class="container">
    @if(session()->has('user'))
        {{View:: make('user')}}
    @else
        @yield('login')
        @yield('button')
    @endif
</div>
{{View:: make('footer')}}