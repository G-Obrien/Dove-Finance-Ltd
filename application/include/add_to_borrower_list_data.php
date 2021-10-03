<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Update Customer Details/Functionality</h3>
            </div>
             <div class="box-body">
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{   
?>                         
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			<div class="form-group">
            <label for="" class="col-sm-2 control-label">Client's Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" />
       				 <img id="blah"  src="../<?php echo $row['image']; ?>" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
						 <div class="form-group">
							<label for="" class="col-sm-2 control-label" style="color:#009900">NIN (ID Number)</label>
							<div class="col-sm-10">
							<input name="nin" type="text" class="form-control" value="<?php echo $row['nin']; ?>" placeholder="nin Code" >
							</div>
          </div>
				  
			
			 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
                  <div class="col-sm-10">
                  <input name="account" type="text" class="form-control" value="<?php echo $row['account']; ?>" placeholder="Account Number" readonly>
                  </div>
                  </div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $row['fname']; ?>" placeholder="First Name" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control" value="<?php echo $row['lname']; ?>" placeholder="Last Name" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email">
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" value="<?php echo $row['phone']; ?>" placeholder="Mobile Number" required>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Address</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" value="<?php echo $row['addrs1']; ?>" placeholder="City" required>
                  </div>
          </div>
					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  	<div class="col-sm-10">
                  <input name="city" type="text" class="form-control" value="<?php echo $row['addrs2']; ?>" placeholder="City" required>
                  </div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Region</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" value="<?php echo $row['city']; ?>" placeholder="City" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Country</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control" value="<?php echo $row['state']; ?>" placeholder="State" required>
                  </div>
                  </div>
				
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">State</label>
                  <div class="col-sm-10">
				<select name="country"  class="form-control" required>
										<option value="">Select a country&hellip;</option>
										<option value="AX">&#197;land Islands</option>
										<option value="AF">Afghanistan</option>
										<option value="KE">Kenya</option>
										<option value="Nigeria">Nigeria</option>
										<option value="RW">Rwanda</option>
										<option value="SS">South Sudan</option>
										<option value="SD">Sudan</option>
										<option value="TZ">Tanzania</option>
										<option value="UG">Uganda</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB">United Kingdom (UK)</option>
										<option value="US" selected='selected'>United States (US)</option>
										<option value="UY">Uruguay</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
									</select>                 
									 </div>
                 					 </div>
									 
					<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                  	<div class="col-sm-10">
					<textarea name="comment"  class="form-control" rows="4" cols="80"><?php echo $row['comment']; ?></textarea>
           			 </div>
					</div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>
<?php
if(isset($_POST['save']))
{
$id = $_GET['id'];
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$addrs1 = mysqli_real_escape_string($link, $_POST['addrs1']);
$addrs2 = mysqli_real_escape_string($link, $_POST['addrs2']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$nin = mysqli_real_escape_string($link, $_POST['nin']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$account = mysqli_real_escape_string($link, $_POST['account']);
$comment = mysqli_real_escape_string($link, $_POST['comment']);
$status = "Completed";

//this handles uploading of image
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
if($image == "")
{
	$insert = mysqli_query($link, "UPDATE borrowers SET fname='$fname', lname='$lname', email='$email', phone='$phone', addrs1='$addrs1', addrs2='$addrs2', city='$city', state='$state', nin='$nin', country='$country', comment='$comment', account='$account' WHERE id = '$id'") or die (mysqli_error($link));
	if(!$insert)
	{
		echo "<div class='alert alert-info'>Update Error.....Please try again later</div>";
	}
	else{
		echo "<script>alert('Customer Info Updated Successfully!');</script>";
		echo "<script>window.location='add_to_borrower_list.php?id=".$id."&&mid=".base64_encode("410")."';</script>";
	}
}
else{
	$target_dir = "../img/";
	$target_file = $target_dir.basename($_FILES["image"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	
	if($check == false)
	{
		echo "<p style='font-size:24px; color:#FF0000'>Invalid file type</p>";
	}
	elseif(file_exists($target_file)) 
	{
		echo "<p style='font-size:24px; color:#FF0000'>Already exists.</p>";
	}
	elseif($_FILES["image"]["size"] > 500000)
	{
		echo "<p style='font-size:24px; color:#FF0000'>Image must not more than 500KB!</p>";
	}
	elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
	{
		echo "<p style='font-size:24px; color:#FF0000'>Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</p>";
	}
	else{
		$sourcepath = $_FILES["image"]["tmp_name"];
		$targetpath = "../img/" . $_FILES["image"]["name"];
		move_uploaded_file($sourcepath,$targetpath);

		$location = "img/".$_FILES['image']['name'];

		$insert = mysqli_query($link, "UPDATE borrowers SET fname='$fname', lname='$lname', email='$email', phone='$phone', addrs1='$addrs1', addrs2='$addrs2', city='$city', state='$state', nin='$nin', country='$country', comment='$comment', account='$account', image='$location' WHERE id = '$id'") or die (mysqli_error($link));
		if(!$insert)
		{
			echo "<div class='alert alert-info'>Update Error.....Please try again later</div>";
		}
		else{
			echo "<script>alert('Customer Info Updated Successfully!');</script>";
			echo "<script>window.location='add_to_borrower_list.php?id=".$id."&&mid=".base64_encode("410")."';</script>";
		}
	}
}
}
?>			  
			 </form> 
			 
<?php } ?>


</div>	
</div>	
</div>
</div>