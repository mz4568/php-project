<?php include '/partialPages/header.php';?>

<?php $db= new Database();
   $query="SELECT*FROM product"; 
   $value= $db->select($query);
;?>

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
  <div class="">
    
    <div>

       <h4 class="title">Product Table</h4>

    </div>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Product Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

       <?php if(isset($value)){ ?>
       <?php while($data= $value->fetch_assoc()){?>
       <tr>
         <td><?php echo $data['product_name'];?></td>
         <td><a href="update.php?id=<?php echo $data['id'];?>"> Edit </a>||<a href="#"> Delete </a></td>
      </tr>
      <?php } ?>
      <?php } else { ?>
        <p> data is not abailable </p>
       <?php } ?>
     
      </tbody>
        
     </table>

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