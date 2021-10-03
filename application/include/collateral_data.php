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
              <li class="active"><a href="#tab_1" data-toggle="tab">All Collateral Securities</a></li>
              <li ><a href="#tab_2" data-toggle="tab">Add Collateral</a></li>
          <li><a href="#tab_3" data-toggle="tab">Released Collaterals</a></li>
        </ul>

  <div class="tab-content">

    <div class="tab-pane active" id="tab_1"> 
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
			 <table id="example1" class="table table-bordered table-striped">  
       <thead>
         <tr>
           <td colspan="9"><center><b style="color:green;">ALL COLLATERAL SECURITIES PRESENTED BY BORROWERS</b></center></td>
          </tr>
          <tr>
             <?php
            $query = mysqli_query($link, "SELECT * FROM systemset");
            $get_query = mysqli_fetch_array($query);
            ?>
          <th><input type="checkbox" id="select_all"/></th>
          <th>ID</th>
          <th>Image</th>
				  <th>S/No.</th>
          <th>Name</th>
				  <th>Type</th>
          <th>Model</th>
          <th>Est. Cost <?php echo "- ( ". $get_query['currency']." )"  ?></th>
          <th>Ownership</th>
          <th>Status</th>
          <th>Stand Date</th>
          <th>Action</th>
          </tr>
        </thead>
        <tbody>
    <?php
    $select = mysqli_query($link, "SELECT * FROM collateral") or die (mysqli_error($link));
    if(mysqli_num_rows($select)==0)
    {
    echo "<div class='alert alert-info'>No data found yet! Please try again later!!</div>";
    }
    else{
    while($row = mysqli_fetch_array($select))
    {
    $id = $row['id'];
    $serial = $row['serial_number'];
    $name = $row['name'];
    $type = $row['type_of_collateral'];
    $model = $row['model'];
    $cost = $row['estimated_price'];
    $owner = $row['proof_of_ownership'];
    $state = $row['status'];
    $stndate = $row['releasedate'];
    //$image = $row['image'];
    ?>    
    <?php
        $query = mysqli_query($link, "SELECT * FROM systemset");
    $get_query = mysqli_fetch_array($query);
    ?>

    <tr>
			<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
       <td><?php echo $id; ?></td>
			 <td><img class="img-square" src="../<?php echo $row ['cimage'];?>" width="30" height="30"></td>
        <td><?php echo $serial; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $type; ?></td>
				<td><?php echo $model; ?></td>
        <td><?php echo number_format($cost,1,'.',',')."/-"; ?></td>
				<td><?php echo $owner; ?></td>
				<td><?php 
        if ($state == '') {
          # code...
          echo "<small style='color:red'>Missing!</small>";
        }else{
        echo $state;
        } ?></td>
        <td><?php 
        if ($stndate <= 0) {
          # code...
          echo "<small style='color:red'>No Date!</small>";
        }else{
       echo $stndate;
        }
         ?>
      </td>
      <td><?php echo ' <input type="submit" name="delete" value="Delete" style="color:white; background:red;"> '; ?></td>
      </tr>
      <?php
        }
      } 
      ?>
    </tbody>
  </table>  
   <?php
        if(isset($_POST['delete'])){
        $idm = $_GET['id'];
          $id=$_POST['selector'];
          $N = count($id);
						if($id == ''){
						echo "<script>alert('Item Not Selected!!!'); </script>";	
						echo "<script>window.location='collateral.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM collateral WHERE id ='$id[$i]'");
								echo "<script>alert('Item Delete Successfully!!!'); </script>";
								echo "<script>window.location='collateral.php?id=".$_SESSION['tid']."'; </script>";
							}
						}
					}
     ?>			
  </form>
</div>

    <!-- /.tab-pane -->
<div class="tab-pane " id="tab_2">
<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div align="center"><h4>Add new Collateral Item</h4></div>
      <div align="center">Fields in red are required</div>

				<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Client's Name/Account:</label>
                  <div class="col-sm-10">
                  <?php
              $selectb = mysqli_query($link, "SELECT * FROM borrowers") or die (mysqli_error($link));
              while($rowb = mysqli_fetch_array($selectb))
              {
                ?>
                <select name="borrowerID" id="Collateral Owner" required class="form-control">
                  <option >---  Please Select borrower  ----</option>
                  <option value="<?php echo $rowb['account']  ?>">
                  <?php 
                  if (!$rowb['account']) {
                    # code...
              echo "<div class='alert alert-info'>No Borrower is found to assign security, Please again later!!</div>";
                  }
                  else{ echo $rowb['lname']." ".$rowb['fname'];  }?>
                </option>
                </select>
                  <?php
              }
              ?>
              </div>
        </div>
        <div class="form-group">
              <label for="" class="col-sm-2 control-label" style="color:#009900">Item's Name:</label>
              <div class="col-sm-10">
              <input name="name" type="text" class="form-control">
          </div>
        </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Type of Collateral:</label>
                  <div class="col-sm-10">
                  <input name="type_of_collateral" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Model:</label>
                  <div class="col-sm-10">
                  <input name="model" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Made:</label>
                  <div class="col-sm-10">
                  <input name="make" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Serial Number or Identification:</label>
                  <div class="col-sm-10">
                  <input name="serial_number" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Estimated Price:</label>
                  <div class="col-sm-10">
                  <input name="estimated_price" type="text" class="form-control">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Proof of Ownership:</label>
                  <div class="col-sm-10">
  Accepted file types <span style="color:#FF0000">jpg, gif, png, xls, xlsx, csv, doc, docx, pdf</span>
        <input name="uploaded_file" type="file" class="btn btn-info">
                    </div>
                    </div>
            
        <div class="form-group">
          <label for="" class="col-sm-2 control-label" style="color:#009900">Item's Image:</label>
           <div class="col-sm-10">
                     Accepted file types <span style="color:#FF0000">jpg, png </span>
             <input name="image" type="file" class="btn btn-info">
          </div>
        </div>
            
            <div class="form-group">
                      <label for="" class="col-sm-2 control-label" style="color:#009900">Observations:</label>
                      <div class="col-sm-10">
            <textarea name="observation"  class="form-control" rows="4" cols="80"></textarea>
              </div>
            </div>
                
        <div align="left">
          <div class="box-footer">
              <button type="submit" class="btn btn-success btn-flat" name="submit"><i class="fa fa-save">&nbsp;Submit</i></button>
          </div>
        </div>
  <?php
  if(isset($_POST['submit']))
  {
  $id = $rowb['account'];
  $tid = $_SESSION['tid'];
  $name = mysqli_real_escape_string($link, $_POST['name']);
  $type_of_collateral = mysqli_real_escape_string($link, $_POST['type_of_collateral']);
  $model = mysqli_real_escape_string($link, $_POST['model']);
  $make = mysqli_real_escape_string($link, $_POST['make']);
  $serial_number = mysqli_real_escape_string($link, $_POST['serial_number']);
  $estimated_price = mysqli_real_escape_string($link, $_POST['estimated_price']);
  $proof_of_ownership = mysqli_real_escape_string($link, $_POST['proof_of_ownership']);

  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
  $image_size = getimagesize($_FILES['image']['tmp_name']);

  move_uploaded_file($_FILES["image"]["tmp_name"], "cimage/".$_FILES["image"]["name"]);

  $cimage = "cimage/".$_FILES['image']['name'];

  $observation = mysqli_real_escape_string($link, $_POST['observation']);

  //upload random name/number
    $rd2 = mt_rand(1000,9999)."_File"; 
    
    //Check that we have a file
    if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    //Check if the file is JPEG image and it's size is less than 350Kb
    $filename = basename($_FILES['uploaded_file']['name']);
    
    $ext = substr($filename, strrpos($filename, '.') + 1);

    $selId = mysqli_query($link, "SELECT * FROM collateral") or die (mysqli_error($link));
     while($fetId = mysqli_fetch_array($selId))
    if ($serial_number = $fetId['serial_number']) {
      # code...
      echo "<script>alert('Item with provided Number Existed, Please Use another Item!'); </script>";	
			echo "<script>window.location='collateral.php? = Try New Entry'; </script>";
    
    if (($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload"))  {
      //Determine the path to which we want to save this file      
      //$newname = dirname(__FILE__).'/upload/'.$filename;
      $newname="document/".$rd2."_".$filename;      
      //Check if the file with the same name is already exists on the server
  
          //Attempt to move the uploaded file to it's new place
          if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
        //successful upload
            // echo "It's done! The file has been saved as: ".$newname;		   

  $insert = mysqli_query($link, "INSERT INTO collateral VALUES('','$id','$tid','$name','$type_of_collateral','$model','$make','$serial_number','$estimated_price','$proof_of_ownership','$cimage','$observation')") or die (mysqli_error($link));
  if(!$insert)
  {
  echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
  }
  else{
  echo "<script>alert('Collateral Added Successfully!!'); </script>";
  echo "<script>window.location='collateral_data.php?id=".$id."&&mid=".base64_encode("405")."'; </script>";
           }
         }
        }
       }
     }
    }
  ?>
</div>
<!-- /.tab-content -->
 
    <!-- /.tab-pane -->
    <div class="tab-pane" id="tab_3">
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
			 <table id="example1" class="table table-bordered table-striped">  
       <thead>
         <tr>
           <td colspan="9"><center><b style="color:green;">ALL COLLATERAL SECURITIES RELEASED WITH SETTLED CASES</b></center></td>
          </tr>
          <tr>
             <?php
            $query = mysqli_query($link, "SELECT * FROM systemset");
            $get_query = mysqli_fetch_array($query);
            ?>
          <th><input type="checkbox" id="select_all"/></th>
          <th>ID</th>
          <th>Image</th>
				  <th>S/No.</th>
          <th>Name</th>
				  <th>Type</th>
          <th>Est. Cost <?php echo "- ( ". $get_query['currency']." )"  ?></th>
          <th>Released-Date</th>
          <th>Ownership</th>
          <th>Status</th>
          <th>Stand Date</th>
          <th>Action</th>
          </tr>
        </thead>
        <tbody>
    <?php
    $select = mysqli_query($link, "SELECT * FROM collateral WHERE status = 'SETTLED' ") or die (mysqli_error($link));
    if(mysqli_num_rows($select)==0)
    {
    echo "<div class='alert alert-info'>No data found yet! Please Check later!!</div>";
    }
    else{
    while($row = mysqli_fetch_array($select))
    {
    $id = $row['id'];
    $serial = $row['serial_number'];
    $name = $row['name'];
    $type = $row['type_of_collateral'];
    $model = $row['model'];
    $cost = $row['estimated_price'];
    $owner = $row['proof_of_ownership'];
    $state = $row['status'];
    $stndate = $row['releasedate'];
    //$image = $row['image'];
    ?>    
    <?php
        $query = mysqli_query($link, "SELECT * FROM systemset");
    $get_query = mysqli_fetch_array($query);
    ?>

    <tr>
			<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
       <td><?php echo $id; ?></td>
			 <td><img class="img-square" src="../<?php echo $row ['cimage'];?>" width="30" height="30"></td>
        <td><?php echo $serial; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $type; ?></td>
        <td><?php echo number_format($cost,1,'.',',')."/-"; ?></td>
        <td><?php echo $stndate; ?></td>
				<td><?php echo $owner; ?></td>
				<td><?php 
        if ($state == '') {
          # code...
          echo "<small style='color:red'>Missing!</small>";
        }else{
        echo $state;
        } ?></td>
        <td><?php 
        if ($stndate <= 0) {
          # code...
          echo "<small style='color:red'>No Date!</small>";
        }else{
       echo $stndate;
        }
         ?>
      </td>
      <td><?php echo ' <input type="submit" name="delete" value="Delete" style="color:white; background:red;"> '; ?></td>
      </tr>
      <?php
        }
      } 
      ?>
    </tbody>
  </table>  
   <?php
        if(isset($_POST['delete'])){
        $idm = $_GET['id'];
          $id=$_POST['selector'];
          $N = count($id);
						if($id == ''){
						echo "<script>alert('Item Not Selected!!!'); </script>";	
						echo "<script>window.location='collateral.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM collateral WHERE id ='$id[$i]'");
								echo "<script>alert('Item Delete Successfully!!!'); </script>";
								echo "<script>window.location='collateral.php?id=".$_SESSION['tid']."'; </script>";
							}
						}
					}
     ?>			
  </form>
  </div>
  <!-- /.tab-pane -->

</div>
				 			
				</div>
     </div>
			 

	
</div>	
</div>
</div>	
</div>