<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> New Borrower</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
<?php
if(isset($_POST['save']))
{
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
$comment = mysqli_real_escape_string($link, $_POST['comment']);
$account = mysqli_real_escape_string($link, $_POST['account']);
$status = "Pending";

//$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
//$image_name = addslashes($_FILES['image']['name']);
//$image_size = getimagesize($_FILES['image']['tmp_name']);

$target_dir = "../img/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["image"]["tmp_name"]);

if($check == false)
{
	echo '<meta http-equiv="refresh" content="2;url=listborrowers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Invalid file type</span>';
}/*
elseif(file_exists($target_file)) 
{
	echo '<meta http-equiv="refresh" content="2;url=listborrowers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Already exists.</span>';
}*/
elseif($_FILES["image"]["size"] > 500000)
{
	echo '<meta http-equiv="refresh" content="2;url=listborrowers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Image must not more than 500KB!</span>';
}
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
	echo '<meta http-equiv="refresh" content="2;url=listborrowers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</span>';
}
else{
	$sourcepath = $_FILES["image"]["tmp_name"];
	$targetpath = "../img/" . $_FILES["image"]["name"];
	move_uploaded_file($sourcepath,$targetpath);
	
	$location = "img/".$_FILES['image']['name'];

$insert = mysqli_query($link, "INSERT INTO borrowers VALUES('','$fname','$lname','$email','$phone','$addrs1','$addrs2','$city','$state','$nin','$country','$comment','$account','0.0','$location',NOW(),'$status')") or die (mysqli_error($link));
if(!$insert)
{
echo "<div class='alert alert-info'>Unable to Insert Borrower Records! Please try again later</div>";
}
else{
echo '<meta http-equiv="refresh" content="2;url=listborrowers.php">';
echo '<br>';
echo "<div class='alert alert-success'>Borrower Created Successfully!</div>";
}
}
}
?>			  				
			<div class="form-group">
            <label for="" class="col-sm-2 control-label">Client's Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" /required>
       				 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Temprary Account Number</label>
                  <div class="col-sm-10">
							<?php
							//generate random account number..
							$account = '014'.rand(1000000,10000000);
							?>
					<input name="account" type="text" class="form-control" value="<?php echo $account; ?>" placeholder="Account Number" readonly>
				</div>
			</div>
			 <div class="form-group">
						<label for="" class="col-sm-2 control-label" style="color:#009900">ID Number or NIN:</label>
						<div class="col-sm-10">
						<input name="nin" type="text" class="form-control" placeholder="NIN or Required Identification Equivalent" >
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
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" placeholder="Email">
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
						<input name="addrs1" type="text" class="form-control" placeholder="Place of residence" required >
						</div>

          </div>
					
			<div class="form-group">
        	<label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
						<div class="col-sm-10">
						<input name="addrs2" type="text" class="form-control" placeholder="District" required >
						</div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">City</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" placeholder="City"required >
                  </div>
                  </div>
				  
	     	<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Region</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control" placeholder="Region" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">State</label>
                  <div class="col-sm-10">
				<select name="country"  class="form-control" required>
										<option value="">Select a country&hellip;</option>
										<option value="AF">Afghanistan</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AO">Angola</option>
										<option value="CG">Congo (Brazzaville)</option>
										<option value="CD">Congo (Kinshasa)</option>			
										<option value="EG">Egypt</option>
										<option value="KE">Kenya</option>
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
                  	<div class="col-sm-10"><textarea name="comment"  class="form-control" rows="4" cols="80"></textarea></div>
          	</div>

			 </div>
			 
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