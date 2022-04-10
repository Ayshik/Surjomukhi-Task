@extends('Layouts.panel')
    @section('content')
    @if(Session::has('admin'))
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{Session::get('admin')}}</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>32<sup style="font-size: 20px"></sup></h3>

                <p>Total Admin</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-shield"></i>
              </div>
              <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>55<sup style="font-size: 20px"></sup></h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="employee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total Laptops</p>
              </div>
              <div class="icon">
                <i class="fas fa-laptop"></i>
              </div>
              <a href="laptop.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>99</h3>


                <p>Laptops In Stock</p>
              </div>
              <div class="icon">
                <i class="fas fa-laptop-house"></i>
              </div>
              <a href="inventory.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
            <!-- Again Smaill Boxes --->
            
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>99<sup style="font-size: 20px"></sup></h3>

                <p>Faulty Laptops</p>
              </div>
              <div class="icon">
                <i class="fas fa-skull-crossbones"></i>
              </div>
              <a href="faulty.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary ">
              <div class="inner">
                <h3>78</h3>

                <p>Customized Laptops</p>
              </div>
              <div class="icon">
                <i class="fas fa-tools"></i>
              </div>
              <a href="customize.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		   <div class="col-lg-3 col-6">
		  <div class="small-box bg-secondary">
              <div class="inner">
                <h3>33</h3>

                <p>Laptops are Allocated to Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tag"></i>
              </div>
              <a href="allocate.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
			</div>
            <!-- Small Boxes End --->


        



          
          <!-- ./col -->
        </div>
		</div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    @endif
      @endsection