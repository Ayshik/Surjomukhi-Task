
    @extends('Layouts.Template')
    @section('content')

    <form class="box" action="{{route('loginsubmit')}}" method="post">

    {{csrf_field()}}
    
      <h1>Login</h1>
    
      <input type="text" name="uname" placeholder="Username"  required/>
      <div> @error('uname')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="password" name="password" placeholder="Password" required/>
      <div> @error('password')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="submit" name="login" value="Login" />
      <div>
                                @if(session()->has('login_error'))
                                      <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                      {{session('login_error')}}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">×</span></button>
                                    </div>
                                @endif  
                                </div>
    </form>

      @endsection