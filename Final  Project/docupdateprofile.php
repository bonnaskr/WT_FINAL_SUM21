<?php include 'mainheader.php';
	include 'controllers/doctorController.php';
	$id = $_GET["id"];
	$d = getupdateProfile($id);

?>
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="hidden" name="id" value="<?php echo $d["id"];?>">
			<input type="text" name="name" value="<?php echo $d["name"];?>" class="form-control">
		</div>

		<div class="form-group text-center">

			<input type="submit" name="update_profile" class="btn btn-success" value="Update Profile" class="form-control">
		</div>
	</form>
</div>

<?php include 'mainfooter.php';?>
