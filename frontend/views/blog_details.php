<!doctype html>
<html>
<?php $this->load->view('head');?>
<body>
	
	<?php $this->load->view('header');?>
	<?php $this->load->view('main_nav');?>
	<?php $this->load->view('mobile_nav');?>
<section class="page_title ds pb100 pt100">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- <h1>About Us</h1> -->
				<div class="breadcrumb-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a>Blog</a>
						</li>
						<li class="breadcrumb-item active">
							Blog Details
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
<section class="blog-section blog-details">
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="blog-details-wrapper">
				<img src="<?php echo base_url();?>assets/images/blog/blog-details-img.jpg" alt="" class="img-fluid" />
				<h5 class="title color-d5">As you might have guessed, most designers choose this unit arbitrarily.</h5>
				<ul class="tags ptb-20">
					<li><i class="fa fa-heart color-72"></i>22</li>
					<li><i class="fa fa-commenting-o color-72"></i>19</li>
					<li><i class="fa fa-folder-open color-72"></i>Spa Procedures</li>
					<li><i class="fa fa-calendar color-72"></i>30 May 2018</li>
				</ul>
				<p>
				As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.</p>
				
				<p>
					As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.
					<br/><br/> Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?
					<br/><br/> As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.
				</p>

			</div>

			<div class="comment-section">
				<h5 class="title">Comments</h5>

				<ul>
					<li>
						<div class="comment">
							<img src="<?php echo base_url();?>assets/images/blog/man1.png" alt="commenter">
							<div>
								<h6><a href="javascript:void(0)">James Dean</a><span>10 Nov, 2018</span></h6>
								<p>Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?</p>
								<a href="javascript:void(0)" class="reply"><i class="fa fa-reply"></i>Reply</a>
							</div>
						</div>
					</li>
					<li>
						<div class="comment">
							<img src="<?php echo base_url();?>assets/images/blog/man2.png" alt="commenter">
							<div>
								<h6><a href="javascript:void(0)">James Dean</a><span>8 Nov, 2018</span></h6>
								<p>Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?</p>
								<a href="javascript:void(0)" class="reply"><i class="fa fa-reply"></i>Reply</a>
							</div>
						</div>
						<ul>
							<li>
								<div class="comment">
									<img src="<?php echo base_url();?>assets/images/blog/man3.png" alt="commenter">
									<div>
										<h6><a href="javascript:void(0)">James Dean</a><span>8 Nov, 2018</span></h6>
										<p>Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?</p>
										<a href="javascript:void(0)" class="reply"><i class="fa fa-reply"></i>Reply</a>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<div class="comment">
							<img src="<?php echo base_url();?>assets/images/blog/man2.png" alt="commenter">
							<div>
								<h6><a href="javascript:void(0)">James Dean</a><span>7 Nov, 2018</span></h6>
								<p>Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?</p>
								<a href="javascript:void(0)" class="reply"><i class="fa fa-reply"></i>Reply</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="comment-form-section">
				<h5 class="title">Leave a Comment</h5>
				<form action="" class="clearfix">
					<input type="text" placeholder="Your Name">
					<input type="email" placeholder="Your Email">
					<textarea name="msg" rows="5" placeholder="Your Message"></textarea>
					<button type="submit" class="default-btn">
						<a href="javascript:void(0)">
						Send Comment</a>
					</button>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<aside class="blog-sidebar clearfix">
				
				<div class="latest-blog-area single-widget">
					<h5 class="widget-title pos-relative">Latest Blog</h5>
					<div class="single-latest-post">
						<a href="blog.html"><img src="<?php echo base_url();?>assets/images/blog/latest-blog.jpg" alt="latest-blog"></a>
						<ul>
							<li>
								<h6><a href="blog.html">Nivea for men’s sensitive hydro gel.</a></h6>
							</li>
							<li><a href="blog.html">Beauty & Skin</a></li>
							<li>26 Oct 2018</li>
						</ul>
					</div>
					<div class="single-latest-post">
						<a href="blog.html"><img src="<?php echo base_url();?>assets/images/blog/latest-blog2.jpg" alt="latest-blog"></a>
						<ul>
							<li>
								<h6><a href="blog.html">Nivea for men’s sensitive hydro gel.</a></h6>
							</li>
							<li><a href="blog.html">Beauty & Skin</a></li>
							<li>24 Oct 2018</li>
						</ul>
					</div>
					<div class="single-latest-post">
						<a href="blog.html"><img src="<?php echo base_url();?>assets/images/blog/latest-blog3.jpg" alt="latest-blog"></a>
						<ul>
							<li>
								<h6><a href="blog.html">Nivea for men’s sensitive hydro gel.</a></h6>
							</li>
							<li><a href="blog.html">Beauty & Skin</a></li>
							<li>20 Oct 2018</li>
						</ul>
					</div>
				</div>
				

			</aside>
		</div>
	</div>
</div>
</section>
	
<?php $this->load->view('footer');?>
	
	
</body>
</html>
