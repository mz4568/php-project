<?php include '/partialPages/header.php';?>
<?php
include_once 'lib/config.php';
include_once 'lib/Database.php';
include_once 'pages/product.php';
//include_once 'pages/Helper.php';
$db  = new Database();
$pro = new Product();
   $query  ="SELECT * FROM category";
   $result =$db->select($query);
?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="overlay"><div class="loader"></div></div>

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
      <h4 class="title">Add New Product</h4>
  </div>
  <?php 

$db = new Database();
if(isset($_POST['submit'])){
$product_name=mysqli_real_escape_string($db->link,$_POST['product_name']);
$cat_name=mysqli_real_escape_string($db->link,$_POST['cat_name']);
$brand_name=mysqli_real_escape_string($db->link,$_POST['brand_name']);
$pro_price=mysqli_real_escape_string($db->link,$_POST['pro_price']);
$pro_quantity=mysqli_real_escape_string($db->link,$_POST['pro_quantity']);

if($product_name==''){
$msg = "field must not be empty";
}else{
$query = "INSERT INTO product(product_name,cat_name,brand_name,pro_price,pro_quantity) values('$product_name','$cat_name','$brand_name','$pro_price','$pro_quantity')";
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
                      <label class="control-label">Product Name</label>
                      <input type="text" class="form-control" name="product_name">
                  </div>
                  <div class="form-group label-floating">
                      <label class="control-label">Category Name</label>
                      <select class="form-control" id="cat" name="cat_name"/>
                      <option value=""> Select Category</option>
                      <?php
                       
                      foreach ($result as $value) { ?>
                      <option value="<?php echo $value['cat_id'];?>"><?php echo $value['cat_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group label-floating">
                      <label class="control-label">Brand</label>
                      <select class="form-control" id="brand" name="brand_name"/>
                       <option value=""> Select Brand</option>
                      <?php
                         $query  ="SELECT * FROM brand";
                         $result =$db->select($query);
                      
                      foreach ($result as $value) { ?>
                      <option value="<?php echo $value['brand_id'];?>"><?php echo $value['brand_name'];?></option>
                      <?php } ?>
                      </select>
                  </div>
                  <div class="form-group label-floating">
                      <label class="control-label">Product Price</label>
                      <input type="text" class="form-control" name="pro_price">
                  </div>
                  <div class="form-group label-floating">
                      <label class="control-label">Product Quantity</label>
                      <input type="text" class="form-control" name="pro_quantity">
                  </div>
              </div>
          </div>
         
          <a href="/inventory/productList.php" class="btn btn-danger">Back</a>
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