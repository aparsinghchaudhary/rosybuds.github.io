<?php
include('connect1.php');
?>
<section id="center" class="p_3 center_o bg_blue">
   <div class="container-xl">
      <div class="row center_o1 text-center">
     <div class="col-md-12">
	   <h1 class="font_60 text-white">EVENT</h1>
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
                <p>No event found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>