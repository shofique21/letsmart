<h1>My letsmart dashboard</h1>
<p>
    @if(Session::has('adminInfo'))
        {{ Session::get('adminInfo')['username'] }}
    @endif
</p>
 <h4><a href="{{route('adminLogin')}}">Logout</a></h4>