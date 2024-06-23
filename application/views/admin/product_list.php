<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h4>Product List</h4>
		</div>
		<div class="col-md-12">
			<table class="table table-sm table-bordered">
				
				<tr>
					<th>Action</th>
					<th>SN</th>
					<th>Category</th>
					<th>Name</th>
					<th>Price</th>
					<th>Company</th>
					<th>Image</th>
				</tr>
				<?php
				foreach($products as $key =>$row)
				{
				?>

				<tr>
					<td>
						<button class="btn btn-primary btn-sm p-1">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-sm p-1">
							<i class="fa fa-trash"></i>
						</button>
					</td>
					<td><?=$key+1?></td>
					<td><?=$row['category_name']?></td>
					<td><?=$row['product_name']?></td>
					<td><?=$row['product_price']?></td>
					<td><?=$row['product_company']?></td>
					<td>
						<a href="<?=base_url()?>uploads/<?=$row['product_image']?>">
							<button class="btn btn-warning p-1">Open</button>
						</a>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
			
		</div>
	</div>
</div>