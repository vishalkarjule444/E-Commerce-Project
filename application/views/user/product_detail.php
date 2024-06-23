<br><br>
<div class="container">
	<div class="row">
		
		<div class="col-md-5">
			<img src="<?=base_url()?>uploads/<?=$product_det[0]['product_image']?>" width="100%">
		</div>
		<div class="col-md-7">
			<h3> <b>Name :</b> <?=$product_det[0]['product_name']?> - <?=dis($product_det[0]['product_price'],$product_det[0]['duplicate_price'])?>% off</h3>

			

			<div class="col-md-12">
				<h3> <b>Company</b> : <?=$product_det[0]['product_company']?></h3>
			</div>

			<div class="col-md-12">
				<h3> <b>Color :</b> <?=$product_det[0]['product_color']?></h3>
			</div>

			<div class="col-md-12">
				<h3> <b>Details :</b> <?=$product_det[0]['product_details']?></h3>
			</div>

			<div class="col-md-12">
				<h3> <b>Price</b> :<del>&#8377;<?=$product_det[0]['duplicate_price']?></del>  </b>&#8377;<?=$product_det[0]['product_price']?></h3>

			</div>

			<br>
			<br>
			<?php
			if(!isset($cart[0]))
			{
			?>
			<a href="<?=base_url()?>in/add_to_cart/<?=$product_det[0]['product_id']?>">
			<button class="btn btn-primary">Add to cart</button>
		</a>
		<?php
		}
		else
		{
			?>
			Added in cart
			<?php
		}
		?>
		</div>

		
	</div>
</div>
<br><br><br>
<br><br><br>