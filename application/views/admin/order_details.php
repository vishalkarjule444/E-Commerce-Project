<div class="container-fluid p-3 bg-white">
	<div class="row">
		<div class="col-md-12 table-responsive">
			<?php
			// print_r($order_det);
			?>
			<table class="table table-sm table-bordered">
				<tr>
					 <th></th>
					 <th>Sr No.</th>
					 <th>order_date</th>
					 <th>customer_name</th>
					 <th>user_tbl_id</th>
					 <th>country</th>
					 <th>state</th>
					 <th>dist</th>
					 <th>city</th>
					 <th>village</th>
					 <th>area</th>
					 <th>landmark</th>
					 <th>apartment_house</th>
					 <th>pincode</th>
					 <th>mobile_no</th>
					 <th>payment_method</th>
					 <th>order_amt</th>
					 <th>order_status</th>
					 <th>dispatch_date</th>
					 <th>dispatch_time</th>
					 <th>delivered_date</th>
					 <th>delivered_time</th>
					 <th>rejected_date</th>
				</tr>
				<?php
				foreach ($order_det as $key => $row)
				 {
					?>
					<tr>
						<td>
						</td>
						<td><?=$key+1?></td>
						<td><?=$row['order_date']?></td>
						<td><?=$row['customer_name']?></td>
						<td><?=$row['user_tbl_id']?></td>
						<td><?=$row['country']?></td>
						<td><?=$row['state']?></td>
						<td><?=$row['dist']?></td>
						<td><?=$row['city']?></td>
						<td><?=$row['village']?></td>
						<td><?=$row['area']?></td>
						<td><?=$row['landmark']?></td>
						<td><?=$row['apartment_house']?></td>
						<td><?=$row['pincode']?></td>
						<td><?=$row['mobile_no']?></td>
						<td><?=$row['payment_method']?></td>
						<td><?=$row['order_amt']?></td>
						<td><?=$row['order_status']?></td>
						<td><?=$row['dispatch_date']?></td>
						<td><?=$row['dispatch_time']?></td>
						<td><?=$row['delivered_date']?></td>
						<td><?=$row['delivered_time']?></td>
						<td><?=$row['rejected_date']?></td>
						
					</tr>
					<?php
				}
				?>
			</table>
		</div>
		<div class="col-md-12">
			<br>
			<?php
			if($order_det[0]['order_status']=="pending")
			{

			?>
			<a href="<?=base_url()?>admin/send_to_reject/<?=$order_det[0]['order_tbl_id']?>" style="text-decoration:none;">
			<button class="btn btn-primary">Reject Order</button>
			</a>
			<a href="<?=base_url()?>admin/send_to_dispatch/<?=$order_det[0]['order_tbl_id']?>">
			<button class="btn btn-primary">confirm & Dispatch order</button>
			</a>
			<?php
		}
		if($order_det[0]['order_status']=="dispatch")
			{

			?>
			<a href="<?=base_url()?>admin/send_to_delivered/<?=$order_det[0]['order_tbl_id']?>">
			<button class="btn btn-success btn-sm">confirm & Delivered order</button>
			</a>
			<?php
		}
		?>
		</div>
	</div>
</div>