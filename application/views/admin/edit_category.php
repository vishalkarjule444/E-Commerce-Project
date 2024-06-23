<form action="<?=base_url()?>admin/update_category" method="post">
			
	<div class="container-fluid p-3 bg-white">
		<div class="row">
			<input type="hidden" name="category_id" value="<?=$info[0]['category_id']?>">
		<div class="col-md-12 mb-4">
			<div class="col-md-12">
				<h4>Add Category</h4>
			</div>
			<div class="col-md-12">
				<label>Enter Category Name</label>
				<input type="text" name="category_name" value="<?=$info[0]['category_name']?>" class="form-control">
			</div>
			<div class="col-md-12 text-center mt-3">
				<button class="btn btn-primary btn-sm">UPDATE</button>
			</div>
		</div>
	</div>	
</form>