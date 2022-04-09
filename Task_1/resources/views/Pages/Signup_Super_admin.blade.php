
    @extends('Layouts.Template')
    @section('content')

    <form class="box" action="{{route('signup_superadmin')}}" method="post">

    {{csrf_field()}}
    
      <h1>Super-Admin Signup</h1>
      <input type="text" name="name" placeholder="Name"  required/>
      <div> @error('name')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="text" name="uname" placeholder="Username"  required/>
      <div> @error('uname')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="text" name="phone" placeholder="phone"  required/>
      <div> @error('phone')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="text" name="address" placeholder="address"  required/>
      <div> @error('address')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="password" name="password" placeholder="Password" required/>
      <div> @error('password')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      <input type="submit" name="Signup" value="Signup" />
    </form>

      @endsection