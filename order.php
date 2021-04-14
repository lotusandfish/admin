<?php 
	include('menu.php');
	$query = pg_query($conn,"SELECT * FROM orders");
?>
<style type="text/css">
  th, tr{
    text-align: center;
  }
  
 </style>
 <div class="container">
  <h2 style="text-align: center">Product Management</h2>       
  <table class="table table-striped">
    <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Customer</th>
          <th scope="col">Address</th>
          <th scope="col">Phone</th>
          <th scope="col">Total</th>
          <th scope="col">Payment Method</th>
          <th scope="col">Created_Date</th>
          <th scope="col">Detail</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while ($item = pg_fetch_array($query)){ 
        ?>
        <tr>
          <th scope="row"><?= $item['orderid'] ?></th>
          <td><?=   $item['customer_name']     ?></td>
          <td><?=   $item['customer_address']  ?></td>
          <td><?=   $item['customer_phone']    ?></td>
          <td><?= number_format($item['total_price'],2) ?> $</td>
          <td><?=   $item['pay']    ?></td>
          <td><?= $item['date_modified'] ?></td>
          <td style="text-align: center;"><a href="detail.php?id=<?= $item['orderid'] ?>"><span style="font-size: 20px;"><i style="color:#FF0094 ; " class="far fa-edit"></i></span></a></td>
        </tr>
        <?php } ?>       
    </tbody>
  </table>
</div>
