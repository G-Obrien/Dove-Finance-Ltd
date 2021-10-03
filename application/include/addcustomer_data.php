<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Clients' Registration Form</h3>
            </div>

             <div class="box-body">
 <?php
if(isset($_POST['save']))
{
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$name =  mysqli_real_escape_string($link, $_POST['lname'] .' '. $_POST['fname']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$addrs1 = mysqli_real_escape_string($link, $_POST['addrs1']);
$addrs2 = mysqli_real_escape_string($link, $_POST['addrs2']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$nin = mysqli_real_escape_string($link, $_POST['nin']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$usertype = mysqli_real_escape_string($link, $_POST['usertype']);
$account = mysqli_real_escape_string($link, $_POST['account']);

$dob =  mysqli_real_escape_string($link, $_POST['dob']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$marital = mysqli_real_escape_string($link, $_POST['marital']);
$age = mysqli_real_escape_string($link, $_POST['age']);

$comment = "New Member";
$username = mysqli_real_escape_string($link, $_POST['cusername']);
$pass = mysqli_real_escape_string($link, $_POST['password']);
$zipcode = mysqli_real_escape_string($link, $_POST['zipcode']);

$target_dir = "../img/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["image"]["tmp_name"]);
	
if($check == false)
{
	echo "<p style='font-size:24px; color:#FF0000'>Invalid file type</p>";
}/*
elseif(file_exists($target_file)) 
{
	echo "<p style='font-size:24px; color:#FF0000'>Already exists.</p>";
}*/
elseif($_FILES["image"]["size"] > 5000000)
{
	echo "<p style='font-size:24px; color:#FF0000'>Image must not more than 5Mbs!</p>";
}
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
	echo "<p style='font-size:24px; color:#FF0000'>Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</p>";
}
else{
	$sourcepath = $_FILES["image"]["tmp_name"];
	$targetpath = "../userpic/" . $_FILES["image"]["name"];
	move_uploaded_file($sourcepath,$targetpath);

	$location = "userpic/".$_FILES['image']['name'];

		$acc_bals = "0.00"; 
	$insert1 = mysqli_query($link, "INSERT INTO twallet 
	 VALUES('', '$zipcode', '$acc_bals')") or die (mysqli_error($link));
		
		$insert = mysqli_query($link, "INSERT INTO user 
	 VALUES('', '$account', '$nin','$name','$email', '$fname','$lname', '$age','$dob','$gender','$marital','$phone','$addrs1','$addrs2','$city','$state','$country','$comment','$username', '$pass', '$zipcode', '$location', '$usertype', NOW())") or die (mysqli_error($link));
	
	if(!($insert1 && $insert))
	{
		echo "<div class='alert alert-info'>Unable to Insert Member Records.....Please try again later</div>";
	}
	else{
		echo "<div class='alert alert-success'>Client Added Successfully!</div>";
	}
}
}
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
  		  			 <input type='file' name="image" onChange="readURL(this);" /required>
       				 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
	
			 <div class="form-group">
              <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
              <div class="col-sm-10">
				<?php
				$account = '013'.rand(1000000,10000000);
				?>
				<input name="account" type="text" class="form-control" value="<?php echo $account; ?>" placeholder="Account Number" readonly>
				</div>
				</div>
				
									<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">NIN (ID Number)</label>
                  <div class="col-sm-10">
                  <input name="nin" type="text" class="form-control" placeholder="ID number" >
                  </div>
                  </div>
				  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" placeholder="First Name" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control" placeholder="Last Name" required>
                  </div>
                  </div>

   <div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Age</label>
					<div class="col-sm-10">
					<input name="age" type="text" class="form-control" placeholder="Client' age">
					</div>
					</div>

			 		<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Date of Birth</label>
					<div class="col-sm-10">
					<input name="dob" type="date" class="form-control" placeholder="Date of Birth" >
					</div>
					</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Gender</label>
					<div class="col-sm-10">
						<select name="gender"  class="form-control" required>
								<option value="">Select Gender &hellip;</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="other">Other</option>
						</select> 
					</div>
					</div>
				
					<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Marital Status</label>
					<div class="col-sm-10">
						<select name="marital"  class="form-control" required>
								<option value="">Select Status &hellip;</option>
								<option value="Married">Married</option>
								<option value="Single">Single</option>
								<option value="Divorced">Divorced</option>
								<option value="other">Other</option>
						</select> 
					</div>
					</div>

		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" placeholder="Mobile Number" required>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                	<label for="" class="col-sm-2 control-label" style="color:#009900">Address</label>
                	<div class="col-sm-10">
                  <input name="addrs1" type="text" class="form-control" placeholder="Place of Recidence" required >
                  </div>
          </div>
					
			<div class="form-group">
                	<label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  <div class="col-sm-10">
                  <input name="addrs2" type="text" class="form-control" placeholder="District/Town" required >
                  </div>
									
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">City</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" placeholder="City" required >
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Region</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control" placeholder="Region" required>
                  </div>
                  </div>

		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Country</label>
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

			 </div>

			 	<div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">User Type</label>
              <div class="col-sm-10">
				<select name="usertype"  class="form-control" required>
										<option value="">Select User Role&hellip;</option>
										<option value="admin">Admin</option>
										<option value="member">Member</option>
										<option value="other">Other</option>
									</select>                 
									 </div>
									 
                </div>
			   </div>
				
				 	<br>
				<h3 style="background:skyblue; color:green; padding:1%;"><center><i class="fa fa-user"></i> Clients' Login Info</center></h3>
			<div class="form-group">
			<label for="" class="col-sm-2 control-label" style="color:#009900">Zip No</label>
			<div class="col-sm-10">
				<?php
				$zip = '10'.rand(100,1000);
				?>
				<input name="zipcode" type="text" class="form-control" value="<?php echo $zip; ?>" placeholder="Account Number" readonly>
				</div>
				</div>
					
					<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" placeholder="Email">
                  </div>
              </div><br><br>

							<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Username</label>
                  <div class="col-sm-10">
                  <input name="cusername" type="text" class="form-control" placeholder="username">
                  </div>
              </div><br><br>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label" style="color:#009900">User Password</label>
						<div class="col-sm-10">
						<input name="password" type="text" class="form-control" placeholder="password">
						</div>

						
				</div>
			 <br><br>
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>
			  
			 </form> 


</div>	
</div>	
</div>
</div>