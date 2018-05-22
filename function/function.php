<?php
include_once '/../lib/config.php';
include_once '/../lib/Database.php';
include_once '/../pages/product.php';
//include_once '/../pages/Helper.php';
$db = new Database();
$pro = new Product();
//$help = new Helper();

// for getting single customer details in addinvoice.php (sale page)
if(isset($_POST["getCustomerData"])){
    $pdt =$pro->getProductData();
     ?>
 <tr>
      <td>
        <select name="product_id[]"class="form-control product_id">

          <option value="1"> Select Product</option>
          <?php
          foreach ($pdt as $row) { ?>
          <option value="<?php echo $row['product_id'];?>"><?php echo $row['product_name'];?></option>
          <?php } ?>
          
        </select>
      </td>
      <td>
        <input name="tqty[]" readonly type="text" class="form-control form-control-sm tqty">
      </td>   
        <td><input name="qty[]" type="text" class="form-control form-control-sm qty"></td>
        <td><input name="price[]" type="text" class="form-control form-control-sm price" readonly></span>
        <span><input name="pro_name[]" type="hidden" class="form-control form-control-sm pro_name"></td>
        <td>Rs.<span class="amt">0</span></td>
  </tr>
<?php
exit();
  }
if(isset($_POST["getPriceQty"])){
    $pdt= $pro->getProductPriceQty($_POST["id"]);
    echo json_encode($pdt);
    exit();
   }
 ?>