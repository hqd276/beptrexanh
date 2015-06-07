<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
<div class="container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <!-- <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol> -->

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="<?php echo base_url('/assets/images/1.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        Tiệc nướng ngoài trời
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo base_url('/assets/images/2.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        Tiệc nướng ngoài trời
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo base_url('/assets/images/3.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        Tiệc nướng ngoài trời
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo base_url('/assets/images/4.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        Tiệc nướng ngoài trời
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!--
	<?php	foreach ($categories as $key => $value) {?>
	<div class="group-item text-center">
		<h3 class="group-title text-uppercase text-left col-sm-6">
			<a href="<?php echo base_url('danh-muc/'.$value['slug'])?>"> 
				<?php echo $value['name'];?> 
			</a>
		</h3>
		<div class="clearfix"></div>
		<?php if ($value['list_product']) {
			foreach ($value['list_product'] as $k => $v) {?>
			<div class="item col-sm-3 col-xs-6">
				<a href="<?php echo base_url().'chi-tiet-san-pham/'.$v['slug']?>" class="img-item"><img src="<?php echo base_url('uploads/product/thumbs/'.$v['image'])?>"></a>
				<a class="title-item" href="<?php echo base_url().'chi-tiet-san-pham/'.$v['slug']?>"><?php echo $v['title']?></a>
				<span class="price-item"><?php echo $v['price']?> VND</span>
			</div>
		<?php }
		}?>
	</div>
	<?php }?>
	-->
</div>