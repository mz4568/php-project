<?php include '/partialPages/header.php';?>

<?php 
  
  $db= new Database();
   
;?>
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
<div class="content">
  
  <div class="panel panel-body" style="">
            <h5 style="text-align:center" >Sales Invoice</h5>
      <form onsubmit="return false" method="POST">
           <div class="col-md-6 col-md-offset-2">
            <label>Order Date</label>
            <div class="form-group row">
              <input type="" class="form-control" id="order_id" placeholder="Order Date"/> 
             </div> 
           </div>
           <div class="col-md-6 col-md-offset-2">
             <label>Customer Name</label>
             <div class="form-group row">
              <input type="" class="form-control" id="customer_id" placeholder="Customer Name"/> 
             </div> 
            </div>
        
         <table class="table table-bordered">
          <thead>
           <tr class="">
              <th class="">Product Number</th>
              <th class="">Total Quantity</th>
              <th class="">Quantity</th>
              <th class="">Price</th>
              
           </tr>
          </thead>
         <tbody id="product_item">
        <!--<tr >
            
           <td>
              <select name="product_id[]"class="form-control" required>
                <option value=""> Select Product</option>
                <option value=""> Laptop</option>
                <option value=""> Monitor</option>
                <option value=""> Led TV</option>
              </select>
            </td>
            <td>              
              <input type="text" class="form-control" name="tqty[]" id="tqty" placeholder="Total Quantity"/> 
            </td>
            <td>              
              <input type="text" class="form-control" name="qty[]" id="qty"   placeholder="Quantity"/> 
            </td>
            <td>              
              <input type="text" class="form-control" name="price[]" id="price"placeholder="Price"/> 
            </td>
            <td>              
              <span></span>            
            </td>
        </tr>-->
          </tbody>
         </table>

      <center>
      <button id="add"class="btn btn-success"style="width:150px"> Add</button>
      <button id="remove"class="btn btn-danger"style="width:150px"> Remove</button>
      </center>

        <p></p>
                    <div class="form-group row">
                      <label for="sub_total" class="col-sm-3 col-form-label" align="right">Sub Total</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="sub_total" class="form-control form-control-sm" id="sub_total" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="gst" class="col-sm-3 col-form-label" align="right">GST (18%)</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="gst" class="form-control form-control-sm" id="gst" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="discount" class="col-sm-3 col-form-label" align="right">Discount</label>
                      <div class="col-sm-6">
                        <input type="text" name="discount" class="form-control form-control-sm" id="discount" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="net_total" class="col-sm-3 col-form-label" align="right">Net Total</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="paid" class="col-sm-3 col-form-label" align="right">Paid</label>
                      <div class="col-sm-6">
                        <input type="text" name="paid" class="form-control form-control-sm" id="paid" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="due" class="col-sm-3 col-form-label" align="right">Due</label>
                      <div class="col-sm-6">
                        <input type="text" readonly name="due" class="form-control form-control-sm" id="due" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="payment_type" class="col-sm-3 col-form-label" align="right">Payment Method</label>
                      <div class="col-sm-6">
                        <select name="payment_type" class="form-control form-control-sm" id="payment_type" required/>
                          <option>Cash</option>
                          <option>Card</option>
                          <option>Draft</option>
                          <option>Cheque</option>
                        </select>
                      </div>
                    </div>

                    <center>
                      <input type="submit" id="order_form" style="width:150px;" class="btn btn-info" value="Order">
                      <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
                    </center>


  </form>

 </div>
 
</div>

</div> 
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php include '/partialPages/script.php';?>
