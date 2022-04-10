@extends('Layouts.panel')
    @section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add User
</button>
<!-- Add admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="{{route('signup_admin_admin')}}" method="post">
{{csrf_field()}}
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" name="name" placeholder="Enter Name" id="adname" required>
  </div>

  <div> @error('name')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>

  <div class="form-group">
    <label for="Username">Username:</label>
    <input type="id" class="form-control" name="uname" placeholder="Enter Username" id="addepartment" required>
  </div>
  <div> @error('uname')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>

  <div class="form-group">
    <label for="Address">Address:</label>
    <input type="Address" class="form-control" name="address" placeholder="Enter Address" id="ademail" required>
  </div>
  <div> @error('address')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>

  <div class="form-group">
    <label for="department">Mobile:</label>
    <input type="department" class="form-control" placeholder="Enter Mobile Number" name="phone" required>
  </div>
  <div> @error('phone')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>

  <div class="form-group">
    <label for="department">Password:</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
  </div>
  <div> @error('password')
               <br><span style="font-weight:bold;color:red" class="text-danger">{{$message}}</span>
            @enderror</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertadmin" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
  </div>
<!-- this is for update -->
<div class="modal fade" id="updatepanel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="{{route('update_admin')}}" method="post">
{{csrf_field()}}
  <div class="form-group">
  <input type="hidden" class="form-control" id="sl" name="sl" placeholder="Enter Name" required>
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name" required>
  </div>
  
  <div class="form-group">
    <label for="designation">Address:</label>
    <input type="address" class="form-control" name="address" placeholder="Enter Address" id="address" required>
  </div>
  <div class="form-group">
    <label for="department">Mobile:</label>
    <input type="mobile" class="form-control" placeholder="Enter Mobile Number" name="mobile" id="mobile" required>
  </div>
  
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updateadmin" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End update -->

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


	 <table id="mytable" class="display">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Phone no</th>
      <th scope="col">Address</th>
      <th scope="col">....</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
     
    </tr>
  </thead>
  @foreach($data as $list)
    <tbody>
        <tr>
        <td>{{$list->id}}</td>
        
        <td>{{$list->Fullname}}</td>
        <td>{{$list->Username}}</td>
        <td>{{$list->Phoneno}}</td>
        <td>{{$list->Address}}</td>
        
        <td>
           
        <td><button class="btn btn-success editbutton" data-toggle="modal" name="editbutton"  ><a  i class="fa fa-pen" style="color:white">  Edit</a></td>
        <td><button type="submit" class="btn btn-danger deletebutton" data-toggle="modal" name="deletebutton"  ><a  href="{{url('/admin/delete')}}/{{$list->id}}" i class="fa fa-trash" style="color:white">  DELETE</a></td>
 

        </td>
        </tr>    
    </tbody>
     @endforeach
   
  
 
</table>





      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->





    @endsection