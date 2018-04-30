<?php
$connect = mysqli_connect("localhost", "root", "", "DunderMdb");
$query ="SELECT * FROM Orders ORDER BY order_id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
     <head>
          <title>View Orders</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
     </head>
     <body>
          <br /><br />
          <div class="container">
               <h3 align="center">Check Inventory</h3>
               <br />
               <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <td>Order ID</td>
                                   <td>SKU ID</td>
                                   <td>Vendor Name</td>
                                   <td>Order Date</td>
                                   <td>Order Amount</td>
                                   <td>Arrival Date</td>
                                   <td>Shipping Cost</td>
                              </tr>
                         </thead>
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo '
                              <tr>
                                   <td>'.$row["order_id"].'</td>
                                   <td>'.$row["sku_id"].'</td>
                                   <td>'.$row["vendor_name"].'</td>
                                   <td>'.$row["order_date"].'</td>
                                   <td>'.$row["order_amt"].'</td>
                                   <td>'.$row["arrival_date"].'</td>
                                   <td>'.$row["shipping_cost"].'</td>

                              </tr>
                              ';
                         }
                         ?>
                    </table>
               </div>
          </div>
     </body>
</html>
<script>
$(document).ready(function(){
     $('#employee_data').DataTable();
});
</script>
