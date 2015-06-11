<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
<div class="container-fluid">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <!-- <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol> -->

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <?php foreach ($banners as $key => $value){?>
	  	<div class="item <?php echo ($key==0)?"active":"" ?>" >
	    	<img src="<?php echo base_url("uploads/banner/".$value['image']); ?>">
	    	<div class="carousel-caption">
	        	
	      	</div>
	    </div>
	   	<?php } ?>
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
</div>
<div class="container">
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