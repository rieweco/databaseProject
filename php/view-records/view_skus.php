<?php
$connect = mysqli_connect("localhost", "root", "", "DunderMdb");
$query ="SELECT * FROM Sku ORDER BY sku_id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
     <head>
          <title>View SKUs</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
     </head>
     <body>
          <br /><br />
          <div class="container">
               <h3 align="center">View Skus</h3>
               <br />
               <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <td>SKU ID</td>
                                   <td>Quantity</td>
                                   <td>Cost Per Unit</td>
                              </tr>
                         </thead>
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo '
                              <tr>
                                   <td>'.$row["sku_id"].'</td>
                                   <td>'.$row["quantity"].'</td>
                                   <td>'.$row["cost_per_unit"].'</td>
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