<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>
	<a href="addcustomer.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Add New</button></a>
	<a href="send_smsloan.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("406"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-envelope"></i>&nbsp;Send SMS</button></a>

	<a href="printcustomer.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Print</a>
	<a href="borrowexcel.php" target="_blank" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Export Excel</a>
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Image</th>
				  <th>Username.</th>
                  <th>Email</th>
				  <th>Mobile</th>
                  <th>NIN/Equivalent</th>
                  <th>Address</th>
          <th>User Role</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody>
	<?php
		$select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
		if(mysqli_num_rows($select)==0)
		{
			echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
			}
			else{
			while($row = mysqli_fetch_array($select))
			{
			$id = $row['userid'];
			$name = $row['name'];
			$mail = $row['email'];
			$phone = $row['phone'];
			$IDNumber = $row['nin'];
			$address = $row['addr1'];
			$role = $row['role'];
			//$image = $row['image'];
		?>    
                <tr>
				<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $id; ?></td>
				 <td><img class="img-circle" src="../<?php echo $row ['image'];?>" width="30" height="30"></td>
          <td><?php echo $name; ?></td>
				<td><?php echo $mail; ?></td>
				<td><?php echo $phone; ?></td>
				<td><?php echo $IDNumber; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php 
        if (!$role) {
          echo"Normal Member";
        }else{
        echo $role; 
        }
        ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
<!--				<td><?php /*/echo $get_query['currency'].number_format($bal,2,'.',',');*/ ?></td> -->
				<td align="center">
					<a href="view_user_list.php?id=<?php echo $id; ?>&&mid=<?php echo base64_encode("410"); ?>" class="btn btn-info btn-flat">View User Details</a><br>
				  <a href="add_to_borrower_list.php?id=<?php echo $id; ?>&&mid=<?php echo base64_encode("410"); ?>" class="btn btn-success btn-flat">Add to Borrowers</a>
			</td>
				
      </tr>
<?php } } ?>
             </tbody>
                </table>  
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Item Not Selected!!!'); </script>";	
						echo "<script>window.location='user.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM user WHERE userid ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='user.php?id=".$_SESSION['tid']."'; </script>";
							}
							}
							}
?>			
</form>
				

              </div>


	
</div>	
</div>
</div>	
</div>