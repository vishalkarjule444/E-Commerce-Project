<br><br>
<form action="<?=base_url()?>in/place_order" method="post">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>Order Address,</h4>
			<div class="row">
				<div class="col-md-6 mb-3">
					Enter country
					<input type="text" name="country" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter state
					<input type="text" name="state" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter Dist
					<input type="text" name="dist" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter city
					<input type="text" name="city" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter village
					<input type="text" name="village" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter Area
					<input type="text" name="area" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter Landmark
					<input type="text" name="landmark" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter Apartment/House No.
					<input type="text" name="apartment_house" class="form-control">	
				</div>
				
				<div class="col-md-6 mb-3">
					Enter Pincode
					<input type="text" name="pincode" class="form-control">	
				</div>
				<div class="col-md-6 mb-3">
					Enter Mobile No
					<input type="text" name="mobile_no" class="form-control">	
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h4>User Products,</h4>
			<table class="table table-sm">
				<?php
				$ttl=0;
				foreach($cart_list as $key => $row)
				{

					?>
					<tr>
						<td><?=$key+1?></td>
						<td><?=$row['product_name']?></td>
						<td><?=$row['qty']?> qty</td>
						<td>&#8377; <?=$row['product_price']?> /-</td>
						<td>&#8377; <?=$row['qty']*$row['product_price']?> /-</td>
					</tr>
					<?php
					$ttl=$ttl+($row['qty']*$row['product_price']);
				}
				?>
				<tr>
					<th class="text-center" colspan="5">
						<h6 style="margin-left:300px;">
							Total - 
							&#8377; <?=$ttl?> /-</h6>
					</th>
				</tr>
			</table>
			<br>
			<h4>Payment Option</h4>
			<input type="radio" name="payment_method" value="Online" checked> Online Payment
			<br>
			<input type="radio" name="payment_method" value="COD"> Cash On Delivery
			<br>

		</div>
		<div class="col-md-12 text-center">
			<br><br>
			<button class="btn btn-primary">Placed Order</button>
			<br><br>

		</div>
	</div>
</div>
</form>
<br><br>