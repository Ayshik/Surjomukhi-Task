
    @extends('Layouts.Template')
    @section('content')


<div class="text">
        <h3 style=color:white;>Read • Write • Listen</h3>
        <h1 style=color:white;>Stay Home , Stay Safe</h1>
        <h2 style=color:white;>---------------------------------------------------------</h2>
        <button id="buttonone" < onclick="window.location.href='{{route('login')}}';">
          Login
        </button>
		
        <div class="dropdown">
        <button class="buttontwo">
          Sign-Up </button>
          <div>
            
              <a href="{{route('admin_signup')}}">As Admin</a>
              <a href="{{route('superadmin_signup')}}">As Super Admin</a>
              <a href="{{route('user_signup')}}">As User</a>
              
            
          </div>
       
      </div>
       
      </div>

      @endsection