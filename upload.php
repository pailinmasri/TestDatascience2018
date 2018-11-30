<?php 
	include('header-sds.php');
 ?>
 	<div class="container-fluid">
		<h1 class="show"> #การแสดงผล </h1>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 input-img">
				<input class="form-control img-sds" type="file" name="upload" role="button">
				<br>
				<label for="description-img">รายละเอียดของภาพ :</label>
				<textarea class="form-control description" rows="3"></textarea>
				<center>
					<button class="btn btn-default button-submit-img" type="submit">Submit</button>
				</center>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<center>
					<a href="good-sds.php"><img src="img/megaphone.png" class="img-cricle good-img" width="160" height="160">
					<p class="promotion">Good Promotion</p></a>
				</center>
			</div>
			<div class="col-md-3">
				<center>
					<a href="bad-sds.php"><img src="img/danger.png" class="img-cricle good-img" width="160" height="160">
					<p class="promotion">Bad Promotion</p></a>
				</center>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>



<?php 
	include('footer-sds.php');
?>