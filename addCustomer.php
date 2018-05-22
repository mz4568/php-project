<?php include '/partialPages/header.php';?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">LogOut</span>
            </a>
            <ul class="dropdown-menu">
            
            </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php include '/partialPages/sidebar.php';?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">
       <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Add New Customer</h4>
            </div>
            <?php 

    $db = new Database();
    if(isset($_POST['submit'])){
    $customer_name = mysqli_real_escape_string($db->link,$_POST['customer_name']);
    if($customer_name==''){
      $msg = "field must not be empty";
    }else{
      $query = "INSERT INTO customer(customer_name) values('$customer_name')";
      $values =$db->insert($query);
    }
  }

 ?>           
             <?php if(isset($msg)){
                echo $msg;
              }?>
              <?php if(isset($values)){
                echo "<span style='color:blue'>".$values."</span>";
              }?>
            <div class="card-content">
             
                <form method="POST" action="" enctype="multipart/form-data">
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name">
                            </div>
                        </div>
                    </div>
                   
                    <a href="/inventory/customerList.php" class="btn btn-danger">Back</a>
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
    </div>
      
    </section>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php include '/partialPages/footer.php';?>
   
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php include '/partialPages/script.php';?>