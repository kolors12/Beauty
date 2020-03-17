<nav class="navbar navbar-default  hidden-sm">
  <div class="container">
  <div class="row">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('home/index');?>"><img src="" alt=""/></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
	  
        	<?php foreach ($category as $category) {?>
		<li class="dropdown navfirst">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<div align="center">
				<img class="img img-responsive nav1" src="<?php echo base_url();?>app-admin/<?php echo $category->image;?>" alt="" />
				</div> 
				<?php echo $category->name;?> <i class="fa fa-angle-down"></i>
			</a>
			<?php if(!empty($category->subs)) {  ?>
			<ul class="dropdown-menu">
				<?php  foreach ($category->subs as $sub)  {?>
			   <li><a href="<?php echo base_url('home/products');?>/<?php echo $category->id;?>/<?php echo $sub->sub_cat_id;?>"><?php echo $sub->sub_cat_name;?></a></li>
				<?php }?>
			  
			</ul>
			<?php }?>
		</li>
		<?php }?>
		 <div class="secondary-nav__toggle" id="target">
		  <button class="secondary-nav__close">
			<div class="secondary-nav__close-icon"></div>
			<p class="secondary-nav__heading line-height-xs margin-top-s" innerhtml="More">More</p>
		  </button>
		</div>
		  <li class="lastli"><a href="javascript:void(0)"><div align="center"><img class="img img-responsive nav9" src="<?php echo base_url();?>assets/images/nav/nav9.png" alt="" /></div>More Events</a></li>
		  <li class="lastli"><a href="javascript:void(0)"><div align="center"><img class="img img-responsive nav10" src="<?php echo base_url();?>assets/images/nav/nav10.png" alt="" /></div>Health & Fitness</a></li>
		
		</ul>
		 
		 

		 
		 

    </div>
  </div>
  </div>
</nav>