<form action="<?=base_url()?>admin/save_product" method="post" enctype="multipart/form-data">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h4>Add New Product</h4>
		</div>
		<div class="col-md-4">
			<b>Select Category</b>
			<select class="form-control" name="product_category" required>
				<option></option>
				<?php
				foreach($cetegory_list as $key => $row)
				{
				?>
				<option value="<?=$row['category_id']?>"><?=$row['category_name']?></option>
				<?php
			}
			?>
			</select>
		</div>

		<div class="col-md-8 mb-3">
			<b>Product Name</b>
			<input type="text" name="product_name" class="form-control p-2" required>

		</div>

		<div class="col-md-4 mb-3">
			<b>Product Price</b>
			<input type="number" name="product_price" class="form-control p-2" required>

		</div>

		<div class="col-md-4 mb-3">
			<b>Product Duplicate Price</b>
			<input type="number" name="duplicate_price" class="form-control p-2" required>
		</div>

		<div class="col-md-4 mb-3">
			<b>Product Company</b>
			<input type="text" name="product_company" class="form-control p-2">
		</div>

		<div class="col-md-4 mb-3">
			<b>Product Color</b>
			<input type="text" name="product_color" class="form-control p-2">
		</div>

		<div class="col-md-4 mb-3">
			<b>Product Image</b>
			<input type="file" name="product_image" class="form-control p-2"required>
		</div>

		<div class="col-md-4 mb-3">
			<b>Product Details</b>
			<textarea type="text" name="product_details" class="form-control p-2"></textarea>
		</div>	

		<div class="col-md-12 mb-3 text-center mt-4">
		<button class="btn btn-primary btn-sm">SAVE PRODUCT</button>
	</div>
	</div>
</div>
</form>
