@extends('Layouts.table')
    @section('content')
<style>body {
  font-family: "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto,
    Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  line-height: 1.4;
  background: #fefefe;
  color: #333;
  margin: 0 1em;
}

table {
  margin: 1em 86px;
  border-collapse: collapse;
}

caption {
  text-align: left;
  font-style: italic;
  padding: 0.25em 0.5em 0.5em 0.5em;
}

th,
td {
  padding: 0.25em 0.5em 0.25em 1em;
  vertical-align: text-top;
  text-align: left;
  text-indent: -0.5em;
}

th {
  vertical-align: bottom;
  background-color: rgba(0, 0, 0, 0.75);
  color: #fff;
  font-weight: bold;
}

.row td:nth-of-type(2), .cell td:nth-of-type(3) {
  font-style: italic;
}

.row th:nth-of-type(3),
.row td:nth-of-type(3),
.cell th:nth-of-type(4),
.cell td:nth-of-type(4) {
  text-align: right;
}

td[colspan] {
  background-color: #eee;
  color: #000;
  font-weight: normal;
  font-style: italic;
  padding: 0;
  text-indent: 0;
}

tr.shown, tr.hidden {
  background-color: #eee;
  display: table-row;
}

tr.hidden {
  display: none;
}

.row button {
  width: 22%;
    text-align: left;
}

.row button:focus, .row button:hover {
  background-color: #ddd;
  outline: .2em solid #00f;
}

.row button svg {
  width: .8em;
  height: .8em;
  margin: 0 0 -.05em 0;
  fill: #66f;
  transition: transform 0.25s ease-in;
  transform-origin: center 45%;
}

.row button:hover svg,
.row button:focus svg {
  fill: #00c;
}

/* Lean on programmatic state for styling */
.row button[aria-expanded="true"] svg {
  transform: rotate(180deg);
}

.cell button {
  font-size: 60%;
  color: #000;
  background-color: #00f;
  padding: 0.3em 0.2em 0 0.2em;
  border: 0.2em solid #00f;
  border-radius: 50%;
  line-height: 1;
  text-align: center;
  text-indent: 0;
  transform: rotate(270deg);
}

.cell button svg {
  width: 1.25em;
  height: 1.25em;
  fill: #fff;
  transition: transform 0.25s ease-in;
  transform-origin: center 45%;
}

.cell button:hover,
.cell button:focus {
  background-color: #fff;
  outline: none;
}

.cell button:hover svg,
.cell button:focus svg {
  fill: #00f;
}

/* Lean on programmatic state for styling */
.cell button[aria-expanded="true"] svg {
  transform: rotate(90deg);
}

/* Proven method to visually hide something but */
/* still make it available to assistive technology */
.visually-hidden {
  position: absolute;
  top: auto;
  overflow: hidden;
  clip: rect(1px 1px 1px 1px); /* IE 6/7 */
  clip: rect(1px, 1px, 1px, 1px);
  width: 1px;
  height: 1px;
  white-space: nowrap;
}</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Permission
</button>
<!-- Add admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Permission Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<div>
<form action="{{route('addmenu')}}" method="post">
{!! csrf_field() !!}

  <div class="form-group">
    <label for="name">New Menu name:</label>
    <input type="name" class="form-control" name="menu" placeholder="Enter Menu Name" id="menu" required>
  </div>
  <div class="modal-footer">
       
        <button type="submit" name="addmenu" class="btn btn-primary">Add Menu</button>
      </div>
</form>
</div>
<form action="{{route('addsubmenu')}}" method="post">
{!! csrf_field() !!}
  <div class="form-group">
    <label for="name">Select Menu name:</label>
   
    <select class="form-control" name="menuall" required id="menuall">
      
        @foreach($menutree as $menutree)
        <option value="{{ $menutree->Menu }}">
                {{ $menutree->Menu }}
              </option>
        @endforeach
     
    </select>

  </div>

  <div class="form-group">
    <label for="Username">Sub menu:</label>
    <input type="id" class="form-control" name="submenu" placeholder="Enter Submenu" id="submenu" required>
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

</div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<table class="cell">
 
  <thead>
    <tr>
      <th><span class="visually-hidden">Toggle</span></th>
      <th>Menu & Submenu------------</th>
      <th>Edit--------------</th>
      <th>Create------------</th>
      <th>View--------------</th>
      <th>Delete------------</th>
      <th>Access------------</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td>
        <button type="button" id="btnMSb" aria-expanded="false" onclick="toggle(this.id,'#MS01b,#MS02b,#MS03b');" aria-controls="MS01b MS02b MS03b" aria-label="3 more from" aria-labelledby="btnMSb lblMSb">
          <svg xmlns="\http://www.w3.org/2000/svg&quot;" viewBox="0 0 80 80" focusable="false"><path d="M70.3 13.8L40 66.3 9.7 13.8z"></path></svg>
        </button>
      </td>

      <td id="lblMSb">Main Menu</td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
    </tr>
    <tr id="MS01b" class="hidden">
      <td>Sub Menu 1</td>
      <td></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
    </tr>
    <tr id="MS02b" class="hidden">
      <td>Sub Menu 2</td>
      <td></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
    </tr>
    <tr id="MS03b" class="hidden">
      <td>Sub Menu 3</td>
      <td></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
      <td><input type="checkbox" value="Checked" name=""  data-toggle="toggle"  ></td>
    </tr>
    
  </tbody>
</table>







      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->


<script>
  function toggle(btnID, eIDs) {
  // Feed the list of ids as a selector
  var theRows = document.querySelectorAll(eIDs);
  // Get the button that triggered this
  var theButton = document.getElementById(btnID);
  // If the button is not expanded...
  if (theButton.getAttribute("aria-expanded") == "false") {
    // Loop through the rows and show them
    for (var i = 0; i < theRows.length; i++) {
      theRows[i].classList.add("shown");
      theRows[i].classList.remove("hidden");
    }
    // Now set the button to expanded
    theButton.setAttribute("aria-expanded", "true");
  // Otherwise button is not expanded...
  } else {
    // Loop through the rows and hide them
    for (var i = 0; i < theRows.length; i++) {
      theRows[i].classList.add("hidden");
      theRows[i].classList.remove("shown");
    }
    // Now set the button to collapsed
    theButton.setAttribute("aria-expanded", "false");
  }
}
</script>
    @endsection