<?php
include('head.php');
?>
<?php
include('nav.php');
?>
<?php
include('connect.php');
?>


<section id="center" class="p_3 center_o bg_blue">
   <div class="container-xl">
      <div class="row center_o1 text-center">
     <div class="col-md-12">
	   <h1 class="font_60 text-white">Blog</h1>
	   <!-- <h6 class="text-dark mb-0 d-inline-block bg_oran p-3 px-4 rounded_30"><a class="text-white" href="#">Home</a> <span class="mx-2 text-white-50">|</span> Blog</h6> -->
	 </div>
  </div>
   </div>
  </section>

		<section id="blog_pg" class="p_3">
    <div class="container-xl">
        <div class="blog_pg1 row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4">
                        <div class="blog_pg1l">
                            <div class="events_1m clearfix">
                                <div class="events_1m1i clearfix position-relative">
                                    <div class="grid clearfix">
                                        <figure class="effect-jazz mb-0">
                                            <img style="height:10%; width:10%; " src="dashboard/<?php echo htmlspecialchars($row['image_path']); ?>" class="w-100" alt="<?php echo htmlspecialchars($row['headline']); ?>">
                                        </figure>
                                    </div>
                                    <div class="blog_pg1l1i border_1 border-top-0 p-4">
                                        <h6 class="font_14 text-muted">
                                            <i class="fa fa-calendar col_oran me-1 ms-2"></i> <?php echo date('jS M Y', strtotime($row['uploaded_at'])); ?>
                                        </h6>
                                        <h3 class="mt-3 mb-3">
                                            <?php echo htmlspecialchars($row['headline']); ?>
                                        </h3>
                                        <p><?php echo htmlspecialchars($row['paragraph']); ?></p>
                                        <h6 class="mb-0">
                                            <br>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No blogs found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- </section>
	   <div class="blog_pg1l1 mt-4">
	     <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="blog_detail.php"><img src="img/26.jpg"  class="w-100" alt="abc"></a>
		  </figure>
	  </div>
	     <div class="blog_pg1l1i border_1 border-top-0 p-4">
		    <h6 class="font_14 text-muted"><i class="fa fa-eye col_oran me-1"></i> 102 Views
 <i class="fa fa-comments col_oran me-1 ms-2"></i> 3 Comments  <i class="fa fa-calendar col_oran me-1 ms-2"></i> 24th May 2022 </h6>
          <h3 class="mt-3 mb-3"><a href="blog_detail.php">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor.</a></h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
		  <h6 class="mb-0"><a class="button" href="blog_detail.php">Read More <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		 </div>
	   </div>
	   <div class="blog_pg1l1 mt-4">
	     <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="blog_detail.php"><img src="img/27.jpg"  class="w-100" alt="abc"></a>
		  </figure>
	  </div>
	     <div class="blog_pg1l1i border_1 border-top-0 p-4">
		    <h6 class="font_14 text-muted"><i class="fa fa-eye col_oran me-1"></i> 102 Views
 <i class="fa fa-comments col_oran me-1 ms-2"></i> 3 Comments  <i class="fa fa-calendar col_oran me-1 ms-2"></i> 24th May 2022 </h6>
          <h3 class="mt-3 mb-3"><a href="blog_detail.php">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor.</a></h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
		  <h6 class="mb-0"><a class="button" href="blog_detail.php">Read More <i class="fa fa-long-arrow-right ms-1"></i></a></h6>
		 </div>
	   </div>
	   <div class="pages mt-4 text-center">
		 <ul class="mb-0">
			<li><a href="blog_detail.php"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="blog_detail.php">1</a></li>
			<li><a href="blog_detail.php">2</a></li>
			<li><a href="blog_detail.php">3</a></li>
			<li><a href="blog_detail.php">4</a></li>
			<li><a href="blog_detail.php">5</a></li>
			<li><a href="blog_detail.php">6</a></li>
			<li><a href="blog_detail.php"><i class="fa fa-chevron-right"></i></a></li>
		   </ul>
	 </div>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="blog_pg1r">
	   <div class="blog_pg1r1">
	    <h4>Search</h4>
		<hr class="line mb-4">
		<div class="subs_o1r">
	   <div class="input-group">
				<input type="text" class="form-control border-0 rounded-0 bg_light" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-primary bg_blue border-0 rounded-0" type="button">
						Search </button>
				</span>
		</div>
	 </div>
	   </div>
	   <div class="blog_pg1r1 mt-4">
	    <h4>Follow Us</h4>
		<hr class="line mb-4">
		<ul class="social-network social-circle mb-0">
					<li><a href="blog_detail.php" class="icoRss" title="Rss"><i class="fa fa-skype"></i></a></li>
					<li><a href="blog_detail.php" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="blog_detail.php" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="blog_detail.php" class="icoGoogle" title="Google +"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="blog_detail.php" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
	   </div>
	   <div class="blog_pg1r1 mt-4">
	    <h4>Categories</h4>
		<hr class="line mb-4">
		<h6 class="mb-0"><a href="blog_detail.php">Branding <span class="pull-right">(6)</span></a></h6><hr>
		<h6 class="mb-0"><a href="blog_detail.php">Development <span class="pull-right">(4)</span></a></h6><hr>
		<h6 class="mb-0"><a href="blog_detail.php">Design <span class="pull-right">(5)</span></a></h6><hr>
		<h6 class="mb-0"><a href="blog_detail.php">Gallery <span class="pull-right">(8)</span></a></h6><hr>
		<h6 class="mb-0"><a href="blog_detail.php">Technology <span class="pull-right">(9)</span></a></h6><hr>
		<h6 class="mb-0"><a href="blog_detail.php">Graphics <span class="pull-right">(7)</span></a></h6>
	   </div>
	   <div class="blog_pg1r1 mt-4">
	    <h4>Recent Posts</h4>
		<hr class="line mb-4">
		<p><a href="blog_detail.php">User Experience Psychology And Performance Smshing August 19, 2020</a></p>
		<p><a href="blog_detail.php">Monthly Web Development Up Cost Of JavaScript August 19, 2020</a></p>
		<p class="mb-0"><a href="blog_detail.php">There are many variation passages of like available. August 19, 2020</a></p>
	   </div>
	   <div class="blog_pg1r1 mt-4">
	    <h4>Tags</h4>
		<hr class="line mb-4">
		<ul class="mb-0 tags">
		<li class="d-inline-block"><a href="blog_detail.php">App</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Branding</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Design</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Gallery</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Video</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Web design</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Consulting</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Corporate</a></li>
		<li class="d-inline-block"><a href="blog_detail.php">Agency</a></li>
		</ul>
	   </div>
	 </div>
	</div>
   </div>
 </div>
</section> -->

<?php
include('footer.php');
?>