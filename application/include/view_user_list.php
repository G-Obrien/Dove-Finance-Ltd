<div class="box">
        
		 <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Viewing User Profile</h3>
            </div>
             <div class="box-body">

<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM user WHERE userid = '$id'") or die (mysqli_error($link));
while($rows = mysqli_fetch_array($select))
{
?>
               
			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_emp2.php?id=<?php echo $id; ?>">
			 <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
      <div class="box-body">
				
      <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">USER'S ROLE</label>
            <div class="col-sm-10">
            <input name="nin" type="text" style="background:warning; font-size:18px; color:red; padding:5px;" value="<?php
            if (!$rows['role']) {
              # code...
              echo "Member";
            }
            else{
            echo $rows['role']; }?>" required>
          </div>
       </div>
    

			<div class="form-group">
            <label for="" class="col-sm-2 control-label">Profile Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" />
       				 <img id="blah"  src="../<?php echo $rows['image']; ?>" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
      <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">NIN (ID Number)</label>
            <div class="col-sm-10">
            <input name="nin" type="text" class="form-control" value="<?php echo $rows['nin']; ?>" required>
          </div>
       </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label" style="color:#009900">ZIP CODE</label>
          <div class="col-sm-10">
          <input name="username" type="text" class="form-control" value="<?php echo $rows['id']; ?>" required>
          </div>
       </div>

      <div class="form-group">
      <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
      <div class="col-sm-10">
      <input name="nin" type="text" style="color:red; font-size:18px; padding:5px;" value="<?php
      if (!$rows['account_no']) {
        # code...
        echo 'Empty Account';
      }
      else{
       echo $rows['account_no'];
       }
        ?>" required>
      </div>
      </div>

			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Full Name</label>
                  <div class="col-sm-10">
                  <input name="name" type="text" class="form-control" value="<?php echo $rows['name']; ?>" required>
                  </div>
                  </div>
				  
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $rows['email']; ?>" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" value="<?php echo $rows['phone']; ?>" required>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Address</label>
                  	<div class="col-sm-10">
                       <input name="state" type="text" class="form-control" value="<?php echo $rows['addr1']; ?>" required>
           			 </div>
          </div>
					
			<div class="form-group">
              <label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
              <div class="col-sm-10">
              <input name="state" type="text" class="form-control" value="<?php echo $rows['addr2']; ?>" required>
              </div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">City</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control" value="<?php echo $rows['city']; ?>" required >
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Region</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control" value="<?php echo $rows['state']; ?>" required>
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
									 
									 
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                  	<div class="col-sm-10">
					<textarea name="comment"  class="form-control" rows="4" cols="80"><?php echo $rows['comment']; ?></textarea>
           			 </div>
          	</div>
			
<hr>	
<div class="alert-danger">&nbsp;MEMBER LOGIN INFORMATION</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Username</label>
                  <div class="col-sm-10">
                  <input name="username" type="text" class="form-control" value="<?php echo $rows['username']; ?>" required>
                  </div>
                </div>
				  
				   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Password</label>
                  <div class="col-sm-10">
                  <input name="password" type="text" class="form-control" value="<?php echo base64_decode($rows['password']); ?>" required>
                  </div>
                  </div>
			  
			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="emp" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>
			  
			 </form> 
<?php } ?>

</div>
</div>
</div>
</div>