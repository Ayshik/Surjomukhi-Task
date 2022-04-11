@extends('Layouts.table')
    @section('content')
<!-- Table with panel -->
<div class="card card-cascade narrower" style="padding-left: 247px;">

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

    <div>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-th-large mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-columns mt-0"></i>
      </button>
    </div>

    <a href="" class="white-text mx-3">Permission Table</a>
    <form action="{{route('updatepermission')}}" method="post">
{{csrf_field()}}
    <div>
      <button style='font-size:24px' type="submit" class="btn btn-outline-white btn-rounded btn-sm px-2">
        Save
        <i class="fas fa-check-double mt-0" style='font-size:30px;color:red'></i>

      </button>
     
    </div>

  </div>
  <!--/Card image-->

  <div class="px-4">

    <div class="table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0">

        <!--Table head-->
        <thead>
       
          <tr>
          <th class="th-lg">
              <a>Sl.
               
              </a>
            </th>
            <th class="th-lg">
              <a>Role
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Access Panel
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Create
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Edit
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">View
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Delete
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        
        <tbody>
      
          <tr>
           
            
            <td>{{$admin->id}}</td>
            <td>Admin</td>
            <input type="hidden" value="unchecked" name="adminaccess" data-toggle="toggle"  >
            <td><input type="checkbox" value="Checked" name="adminaccess" {{$admin->Access}} data-toggle="toggle"  ></td>
            <input type="hidden" value="unchecked" name="admincreate" data-toggle="toggle"  >
            <td><input type="checkbox" value="Checked" name="admincreate" {{$admin->Creates}} data-toggle="toggle"></td>
            <input type="hidden" value="unchecked" name="adminedit" data-toggle="toggle"  >
            <td><input type="checkbox" value="Checked" name="adminedit" {{$admin->Edit}} data-toggle="toggle"></td>
            <input type="hidden" value="unchecked" name="adminview" data-toggle="toggle"  >
            <td><input type="checkbox" value="Checked" name="adminview" {{$admin->View}} data-toggle="toggle"></td>
            <input type="hidden" value="unchecked" name="admindeletes" data-toggle="toggle"  >
            <td><input type="checkbox" value="Checked" name="admindeletes" {{$admin->Deletes}} data-toggle="toggle"></td>
            
           
           
          </tr>


          <tr>
           
            
           <td>{{$superadmin->id}}</td>
           <td>Super Admin</td>

           <input type="hidden" value="unchecked" name="saaccess" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="saaccess" {{$superadmin->Access}} data-toggle="toggle"  ></td>
           <input type="hidden" value="unchecked" name="sacreates" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="sacreates" {{$superadmin->Creates}} data-toggle="toggle"></td>
           <input type="hidden" value="unchecked" name="saedit" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="saedit" {{$superadmin->Edit}} data-toggle="toggle"></td>
           <input type="hidden" value="unchecked" name="saview" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="saview" {{$superadmin->View}} data-toggle="toggle"></td>
           <input type="hidden" value="unchecked" name="sadelete" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="sadelete" {{$superadmin->Deletes}} data-toggle="toggle"></td>
          
          
         </tr>





          <tr>
           
            
           <td>{{$user->id}}</td>
           <td>User</td>
           <input type="hidden" value="unchecked" name="uaccess" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="uaccess" {{$user->Access}} data-toggle="toggle"  ></td>
           <input type="hidden" value="unchecked" name="ucreats" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="ucreats" {{$user->Creates}} data-toggle="toggle"></td>
           <input type="hidden" value="unchecked" name="uedit" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="uedit" {{$user->Edit}} data-toggle="toggle"></td>
           <input type="hidden" value="unchecked" name="uview" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="uview" {{$user->View}} data-toggle="toggle"></td>
           <input type="hidden" value="unchecked" name="udeletes" data-toggle="toggle"  >
           <td><input type="checkbox" value="Checked" name="udeletes" {{$user->Deletes}} data-toggle="toggle"></td>
          
          
         </tr>

        
         
         
          
        </tbody>
       
        <!--Table body-->
      </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <!--Table-->
     
    </div>

  </div>
</form>
</div>
<!-- Table with panel -->

    @endsection