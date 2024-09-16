<?php
include('head.php');
?>
<?php
include('nav.php');
?>
<?php
include('dashboard/connection.php'); // Include the database connection file

// Query the database to retrieve the uploaded notices
$stmt = $conn->prepare("SELECT * FROM result");
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

?>

<section id="center" class="p_3 center_o bg_blue">
   <div class="container-xl">
      <div class="row center_o1 text-center">
     <div class="col-md-12">
	   <h1 class="font_60 text-white">RESULT PUBLICATION</h1>
	   <!-- <h6 class="text-dark mb-0 d-inline-block bg_oran p-3 px-4 rounded_30"><a class="text-white" href="#">Home</a> <span class="mx-2 text-white-50">|</span> Courses</h6> -->
	 </div>
  </div>
   </div>
  </section>
		
<section id="subs">
 <div class="bg_back  pb-5">
 <div class="container-xl">
      <div class="row center_o1 text-center">
     <div class="col-md-12">
		 <div class="subs_1l">
		  <!-- <h1 class="text-white font_24">Fill Your Data</h1> -->
		  <!-- <p class="col_light mb-0">Choose first we will reply you again in gmail . which better for you in +2 level or basic level.</p> -->
						<center><table>
							<style>
								table{
								border-collapse: collapse;
								width: 100%;
								color:white;
								text-align:center;
								}

								</style>
								<br>
  <tr>
    <th>Sn</th>
    <th>Headline</th>
    <th>Date</th>
    <th>Action</th>
  </tr>

  <?php
  $sn = 1; // Initialize a serial number
  while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row['headline']; ?></td>
    <td><?php echo $row['uploaded_at']; ?></td>
    <td class="mb-0 mt-4 text-center"><button style="background-color:transparent; color:none; border: 0px solid; " ><a class="button d-block"  href="<?php echo $row['filename']; ?>" target="_blank">View</a></button></td>
  </tr>
  <?php } ?>

</table></center>
		 </div>
		</div>
		<div class="col-md-4">
		 <div class="subs_1r"></div>
		</div>
     </div>
  </div>
 </div>
</section>


<?php
include('footer.php')
?>