<div class="box">
        
	
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-gear"></i>&nbsp;Update Profile Status</h3>
            </div>
             <div class="box-body">
<?php   
			  				if (isset($_POST['save'])) 
								
								{
								$id= $_POST['id'];
								$name = $_POST['name'];
											$fname = $_POST['fname'];
											$lname = $_POST['lname'];
											$age = $_POST['age'];
											$dob = $_POST['dob'];
											$gender = $_POST['gender'];
											$marital = $_POST['marital'];
									
								$idp = $_POST['idp'];
								$email = $_POST['email'];
							    $number = $_POST['phone'];
									$add1 = $_POST['village'];
									$add2 = $_POST['district'];
									$city = $_POST['city'];
									$state = $_POST['state'];
								$nin = $_POST['nin'];
								$country = $_POST['country'];
								$comment = $_POST['comment'];
								$user = $_POST['user'];
								$password = $_POST['password'];	
								$decript = base64_encode($password)	;					 	
                                //image
									$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
									if($image == "")
								{
                  mysqli_query($link,"UPDATE user SET name='$name', email='$email', fname='$fname', lname='$lname', age='$age', dob='$dob', gender='$gender', marital='$marital', phone='$number',addr1='$add1',addr2='$add2',
										city='$city',state='$state', country='$country',comment='$comment',username='$user',password='$decript',
											image='$location' WHERE id ='$id'")or die(mysqli_error()); 
									echo "<script>window.location='profile.php';</script>";
								}
								else{
								$target_dir = "../img/";
								$target_file = $target_dir.basename($_FILES["image"]["name"]);
								$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								$check = getimagesize($_FILES["image"]["tmp_name"]);
								
								if($check == false)
								{
									echo '<meta http-equiv="refresh" content="2;url=profile.php?tid='.$id.'">';
									echo '<br>';
									echo'<span class="itext" style="color: #FF0000">Invalid file type</span>';
								}
								/*elseif(file_exists($target_file)) 
								{
									echo '<meta http-equiv="refresh" content="2;url=profile.php?tid='.$id.'">';
									echo '<br>';
									echo'<span class="itext" style="color: #FF0000">Already exists.</span>';
								}*/
								elseif($_FILES["image"]["size"] > 500000)
								{
									echo '<meta http-equiv="refresh" content="2;url=profile.php?tid='.$id.'">';
									echo '<br>';
									echo'<span class="itext" style="color: #FF0000">Image must not more than 500KB!</span>';
								}
								elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
								{
									echo '<meta http-equiv="refresh" content="2;url=profile.php?tid='.$id.'">';
									echo '<br>';
									echo'<span class="itext" style="color: #FF0000">Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</span>';
								}
								else{
									$sourcepath = $_FILES["image"]["tmp_name"];
									$targetpath = "../img/" . $_FILES["image"]["name"];
									move_uploaded_file($sourcepath,$targetpath);
									
									$location = "img/".$_FILES['image']['name'];				
					
					      mysqli_query($link,"UPDATE user SET name='$name', email='$email', fname='$fname', lname='$lname', age='$age', dob='$dob', gender='$gender', marital='$marital', phone='$number',addr1='$add1',addr2='$add2',
													city='$city',state='$state', country='$country',comment='$comment',username='$user',password='$decript',
													image='$location' WHERE id ='$id'")or die(mysqli_error()); 
									echo "<script>window.location='../logout.php';</script>";
									}
								}
								}
							?>
			 <?php 
			 $id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id='$id'");
			while($row = mysqli_fetch_assoc($call))
			{

			$era = "Please Update*";	
			?>
     
			  <form class="form-horizontal" method="post" enctype="multipart/form-data">
			 <input type="hidden" value="<?php echo $row ['id']; ?>" name="id"  id="" required>
			 <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
      <div class="box-body">
				
      <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">USER'S ROLE</label>
            <div class="col-sm-10">
            <input name="role" type="text" style="background:warning; font-size:18px; color:red; padding:5px;" value="<?php
            if (!$row['role']) {
              # code...
              echo "Member";
            }
            else{
            echo $row['role']; }?>" disabled="muted">
          </div>
       </div>
    

			<div class="form-group">
            <label for="" class="col-sm-2 control-label">Profile Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" />
       				 <img id="blah"  src="../<?php echo $row['image']; ?>" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
      <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">NIN (ID Number)</label>
            <div class="col-sm-10">
            <input name="nin" type="text" class="form-control" value="<?php echo $row['nin']; ?>" disabled="muted">
          </div>
       </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label" style="color:#009900">ZIP CODE</label>
          <div class="col-sm-10">
          <input name="idp" type="text" class="form-control" value="<?php echo $row['id']; ?>" disabled="muted">
          </div>
       </div>

      <div class="form-group">
      <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
      <div class="col-sm-10">
      <input name="account_no" type="text" style="color:red; font-size:18px; padding:5px;" value="<?php
      if (!$row['account_no']) {
        # code...
        echo 'Empty Account';
      }
      else{
       echo $row['account_no'];
       }
        ?>" disabled="muted">
      </div>
      </div>

			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Full Name</label>
                  <div class="col-sm-10">
                  <input name="name" type="text" class="form-control" value="<?php 
									if ($row['username'] == "") {
										# code...
										echo $era;
									} else{ echo $row['name']; }?>" required>
                  </div>
                  </div>
					<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php 
									if ($row['fname'] == "") {
										# code...
										echo $era;
									} else{ echo $row['fname']; }?>" required>
                  </div>
                  </div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
					<div class="col-sm-10">
					<input name="lname" type="text" class="form-control" value="<?php
					 if ($row['lname'] == "") {
										# code...
										echo $era;
									} else{ echo $row['lname']; }?>" required>
					</div>
					</div>
				
			<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Age</label>
					<div class="col-sm-10">
					<input name="age" type="text" class="form-control" value="<?php	
					if ($row['age'] == "") {
										# code...
										echo $era;
									} else{ echo $row['age']; }?>" required>
					</div>
					</div>

			 		<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Date of Birth <br><br> Edit D.O.B:</label>
					<div class="col-sm-10">
						<input name="dob" type="text" class="form-control" value="<?php 
						if ($row['dob'] <= 0) {
										# code...
										echo $era;
									} else{ echo $row['dob']."*"; }?>" disabled="muted">
					<input name="dob" type="date" class="form-control" value="<?php echo $row['dob']."*"; ?>" >
					</div>
					</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label" style="color:#009900">Gender</label>
					<div class="col-sm-10">
					<select name="gender"  class="form-control">
								<option value="<?php $row['gender']; ?>" selected="selected"><?php
								if ($row['gender'] == "") {
									# code...
									echo $era;
								}
								else{
								echo $row['gender']; }?> &hellip;</option>
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
								<option value="<?php echo $row['marital']; ?>" selected="selected"><?php 
								if ($row['marital'] == "") {
										# code...
										echo $era;
									} else{ echo $row['marital']; }?> &hellip;</option>
								<option value="Married">Married</option>
								<option value="Single">Single</option>
								<option value="Divorced">Divorced</option>
								<option value="other">Other</option>
						</select> 
					</div>
					</div>

		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $row['email']; ?>" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" value="<?php
									if ($row['phone'] == "") {
										# code...
										echo $era;
									} else{ echo $row['phone']; }?>" required>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Address</label>
                  	<div class="col-sm-10">
                       <input name="village" type="text" class="form-control" value="<?php
											 if ($row['addr1'] == "") {
										# code...
										echo $era;
									} else{ echo $row['addr1']; }?>" required>
           			 </div>
          </div>
					
			<div class="form-group">
              <label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
              <div class="col-sm-10">
              <input name="district" type="text" class="form-control" value="<?php
							if ($row['addr2'] == "") {
										# code...
										echo $era;
									} else{ echo $row['addr2']; }?>" required>
              </div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">City</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" value="<?php
									if ($row['city'] == "") {
										# code...
										echo $era;
									} else{ echo $row['city']; }?>" required >
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Region</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control" value="<?php echo $row['state']; ?>" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Country</label>
                  <div class="col-sm-10">
				<select name="country"  class="form-control" required>
										<option value="" selected='selected'><?php echo $row['country']; ?>&hellip;</option>
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
										<option value="US" >United States (US)</option>
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
			
<hr>	
<div class="alert-danger">&nbsp;MEMBER LOGIN INFORMATION</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Username</label>
                  <div class="col-sm-10">
                  <input name="username" type="text" class="form-control" value="<?php 
									if ($row['username'] == "") {
										# code...
										echo $era;
									} else{ echo $row['username']; }?>" required>
                  </div>
                </div>
				  
				   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Password</label>
                  <div class="col-sm-10">
                  <input name="password" type="text" class="form-control" value="<?php echo base64_decode($row['password']); ?>" required>
                  </div>
                  </div>
			  
			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>
			 </form> 
			  <?php }?>



</div>	
</div>
</div>
</div>