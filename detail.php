<?php 
	include('menu.php');
	$id = $_GET['id'];
	$query = pg_query($conn,"SELECT * FROM order_detail WHERE orderid = $id");
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
          <th scope="col">Product_ID</th>
          <th scope="col">Image</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while ($item = pg_fetch_array($query)){ 
        ?>
        <tr>
          <th scope="row"><?= $item['product_id'] ?></th>
          <td><?=   $item['image']     ?></td>
          <td><?=   $item['quantity']  ?></td>
          <td><?= number_format($item['price'],2) ?> $</td>
        </tr>
        <?php } ?>       
    </tbody>
  </table>
</div>
