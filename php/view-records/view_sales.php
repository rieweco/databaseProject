<?php
$connect = mysqli_connect("localhost", "root", "", "DunderMdb");
$query ="SELECT * FROM Sales ORDER BY sale_id DESC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
     <head>
          <title>View Sales</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
     </head>
     <body>
          <br /><br />
          <div class="container">
               <h3 align="center">View Sales</h3>
               <br />
               <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <td>Sale ID</td>
                                   <td>SKU ID</td>
                                   <td>Sale Date</td>
                                   <td>Employee ID</td>
                                   <td>Quantity</td>
                                   <td>Notes</td>
                                   <td>Net Profit</td>
                              </tr>
                         </thead>
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo '
                              <tr>
                                   <td>'.$row["sale_id"].'</td>
                                   <td>'.$row["sku_id"].'</td>
                                   <td>'.$row["sale_date"].'</td>
                                   <td>'.$row["employee_id"].'</td>
                                   <td>'.$row["quantity"].'</td>
                                   <td>'.$row["notes"].'</td>
                                   <td>'.$row["net_profit"].'</td>

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
