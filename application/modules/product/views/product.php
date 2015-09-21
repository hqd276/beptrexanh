<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/product.css">
<div class="container bg-white">
	<h2 class="text-uppercase"><?php echo $title?></h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'danh-muc-san-pham/'. $cat['slug']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="product-form col-md-12">
		<?php foreach ($list_product as $key => $value) {?>
			<div class="item">
				<div class="col-md-4 text-center">
					<img src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
				</div>
				<div class="col-md-8">
					<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
					<p><?php echo split_char($value['description'],150,1)." ..."?></p>
					<div class="price">Giá : <strong><?php echo number_format($value['price'])?></strong> VND </div>
					<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>" class="text-uppercase more pull-right">Chi tiết</a>
				</div>
				
			</div>
		<?php }
		?>
	</div>
	<div class="clearfix"></div>
</div>