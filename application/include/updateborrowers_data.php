<div class="row">
       	
	 <section class="content">
     
	 <?php echo '<div class="alert alert-warning fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Please Note that&nbsp;</strong> &nbsp;&nbsp;You Must Tick All Added Checkbox Before Clicking on update button below
				</div>'?>
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab">Financial Information</a></li>
              <li><a href="#tab_3" data-toggle="tab">Attachment</a></li>
              </ul>
             <div class="tab-content">
             <div class="tab-pane" id="tab_1">
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM borrowers WHERE id = '$id'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{   
?>              
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
             <div class="box-body">
				
			<div class="form-group">
            <label for="" class="col-sm-2 control-label">Client's Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" />
       				 <img id="blah"  src="../<?php echo $row['image']; ?>" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
				
			 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
                  <div class="col-sm-10">
                  <input name="account_no" type="text" class="form-control"  value="<?php echo $row['account']; ?>" readonly>
							</div>
					</div>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">NIN or Equivalent:</label>
                  <div class="col-sm-10">
                  <input name="nin" type="text" class="form-control" value="<?php echo $row['nin']; ?>" readonly>
                  </div>
                  </div>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $row['fname']; ?>" readonly>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control"  value="<?php echo $row['lname']; ?>" readonly>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control"  value="<?php echo $row['email']; ?>" readonly>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="mnumber" type="text" class="form-control" value="<?php echo $row['phone']; ?>" readonly>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Address</label>
                  	<div class="col-sm-10">
											<input name="mnumber" type="text" class="form-control" value="<?php echo $row['addrs1']; ?>" readonly>
           			 </div>
          </div>
					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  	<div class="col-sm-10">
											<input name="mnumber" type="text" class="form-control" value="<?php echo $row['addrs2']; ?>" readonly>
           			 </div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">City/Town</label>
                  <div class="col-sm-10">
                  <input name="city" type="text" class="form-control"  value="<?php echo $row['city']; ?>" readonly>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Region</label>
                  <div class="col-sm-10">
                  <input name="state" type="text" class="form-control"  value="<?php echo $row['state']; ?>" readonly>
                  </div>
                </div>

		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Coutry</label>
                  <div class="col-sm-10">
										<input name="nin" type="text" class="form-control" value="<?php echo $row['country']; ?>" readonly>
				                 
									 </div>
       </div>
									 
									 
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                  	<div class="col-sm-10">
					<textarea name="comment"  class="form-control" rows="4" cols="80" readonly><?php echo $row['comment']; ?></textarea>
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
<?php } ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2">
 <form method="post">
			 	<table>
				<th></th>
				<th align="center" width="400">Occupation</th>
				<th align="center" width="300">Monthly Income</th>
                <tbody> 
<?php
$id = $_GET['id'];
$search = mysqli_query($link, "SELECT * FROM fin_info WHERE get_id = '$id'") or die (mysqli_error($link));
while($have = mysqli_fetch_array($search))
{
$idme= $have['id'];
?>			
				<tr>
				<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $idme; ?>" checked></td>
                <td width="800"><input name="occupation[]" type="text" class="form-control" placeholder="Occupation" value="<?php echo $have['occupation']; ?>"></td>
                <td width="300"><input name="mincome[]" type="number" class="form-control" placeholder="Amount" value="<?php echo $have['mincome']; ?>"></td>
				</tr>
<?php } ?>
				</tbody>
                </table>
<div align="left">
              <div class="box-footer">
                				<button type="submit" class="btn btn-success btn-flat" name="add_fees_rows"><i class="fa fa-plus">&nbsp;Add Row</i></button>
                				<button name="delrow" type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash">&nbsp;Delete Row</i></button>

              </div>
			  </div>
   <?php
						if(isset($_POST['delrow'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($N == 0){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='updateborrowers.php?id=".$idm."&&mid=".base64_encode("403")."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM fin_info WHERE id ='$id[$i]'");
								echo "<script>window.location='updateborrowers.php?id=".$idm."&&mid=".base64_encode("403")."'; </script>";
							}
							}
							}
?>

<?php
if(isset($_POST['add_fees_rows']))
{
$id = $_GET['id'];
$tid = $_SESSION['tid'];
$insert = mysqli_query($link, "INSERT INTO fin_info(id,get_id,tid,occupation,mincome) VALUES('','$id','$tid','','')") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Unable to add row!!!'); </script>";
echo "<script>window.location='updateborrowers.php?id=".$id."&&mid=".base64_encode("403")."'; </script>";
}
else{
echo "<script>window.location='updateborrowers.php?id=".$id."&&mid=".base64_encode("403")."'; </script>";
}
}
?>
<div align="right">
              <div class="box-footer">
               <button type="submit" class="btn btn-info btn-flat" name="add_fees"><i class="fa fa-save">&nbsp;Update Additional Fees</i></button>

              </div>
			  </div>
<?php
if(isset($_POST['add_fees']))
{
$idm = $_GET['id'];
$id = $_POST['selector'];
if($id == ''){
echo "<script>alert('Row Not Selected!!!'); </script>";	
echo "<script>window.location='updateborrowers.php?id=".$idm."&&mid=".base64_encode("403")."'; </script>";
}
else{
$i = 0;
foreach($_POST['selector'] as $s)
{
$fee = mysqli_real_escape_string($link, $_POST['occupation'][$i]);
$amount = mysqli_real_escape_string($link, $_POST['mincome'][$i]);
$update = mysqli_query($link, "UPDATE fin_info SET occupation = '$fee', mincome = '$amount' WHERE id = '$s'") or die (mysqli_error($link));
$i++;
if(!$update)
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Additional Fees/Payment Info Added Successfully!!'); </script>";
echo "<script>window.location='updateborrowers.php?id=".$idm."&&mid=".base64_encode("403")."'; </script>";
}
}
}
}
?>
				</form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
               <form class="form-horizontal" method="post" enctype="multipart/form-data">

                Attachments
Accepted file types <span style="color:#FF0000">jpg, gif, png, xls, xlsx, csv, doc, docx, pdf</span>
			 <input name="uploaded_file" type="file" class="btn btn-info">
			 <div align="left">
              <div class="box-footer">
                				<button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-upload">&nbsp;Upload</i></button>
              </div>
			  </div>
<?php
if(isset($_POST['upload']))
{
$id = $_GET['id'];
$tid = $_SESSION['tid'];

//upload random name/number
	 $rd2 = mt_rand(1000,9999)."_File"; 
	 
	 //Check that we have a file
	if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']['name']);
  
  $ext = substr($filename, strrpos($filename, '.') + 1);
  
  if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload"))  {
    //Determine the path to which we want to save this file      
	  //$newname = dirname(__FILE__).'/upload/'.$filename;
	  $newname="bdocument/".$rd2."_".$filename;      
	  //Check if the file with the same name is already exists on the server
 
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
			//successful upload
          // echo "It's done! The file has been saved as: ".$newname;		   

$insert = mysqli_query($link, "INSERT INTO battachment(id,get_id,tid,attached_file,date_time) VALUES('','$id','$tid','$newname',NOW())") or die (mysqli_error($link));
$insert = mysqli_query($link, "UPDATE borrowers SET status = 'Completed' WHERE id = '$id'") or die (mysqli_error($link));
if(!$insert)
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Documents Added Successfully!!'); </script>";
echo "<script>window.location='listborrowers.php?id=".$_SESSION['tid']."'; </script>";
}
}
}
}
}
?>
			 </form> 
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
				 
					
					
				
				
				</div>
				

              </div>
			 

	
</div>	
</div>
</div>	
</div>