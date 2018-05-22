
$(document).ready(function(){
var DOMAIN = "http://localhost/iiinventory/";
addNewRow();

$('#add').click(function(){
    addNewRow();
})

function addNewRow(){
    $.ajax({
        url:DOMAIN+"function/function.php",
        method: "POST",
        data:{getCustomerData:1},
        success:function(data) {
            $("#product_item").append(data);
            
        }
    })
 }   
$("#remove").click(function(){
  $("#product_item").children("tr:last").remove();
})  

$("#product_item").delegate(".product_id","change",function(){
   var pid = $(this).val();
   var tr  = $(this).parent().parent();
   $(".overlay").show();
    $.ajax({
        url:DOMAIN+"function/function.php",
        method: "POST",
        data:{getPriceQty:1,id:pid},
        dataTpye:"json",
        success:function(data) {
          tr.find(".tqty").val(data["pro_quantity"]);
          tr.find(".pro_name").val(data["product_name"]);
          tr.find(".qty").val(1);
          tr.find(".price").val(data["pro_price"]);
          tr.find(".amt").html(tr.find(".qty").val()
            * tr.find(".price").val());
          calculate(0,0);
        }
      })
})     
});
