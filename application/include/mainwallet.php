<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Wallet'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pdelete = $get_check['pdelete'];
$pcreate = $get_check['pcreate'];
$pupdate = $get_check['pupdate'];
?>
	<?php echo ($pdelete == '1') ? '<button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>' : ''; ?>
	<?php echo ($pupdate == '1') ? '<button data-target= "#c" data-toggle="modal" type="button" class="btn btn-flat btn-info"><i class="fa fa-plus"></i>&nbsp;Transfer Money</button>' : ''; ?>
	<?php echo ($pcreate == '1') ? '<button data-target= "#b" data-toggle="modal" type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Add New Account</button>' : ''; ?>
	<button type="button" class="btn btn-flat btn-info" disabled>&nbsp;DFL Account Bals:&nbsp;
<strong class="alert alert-success">
 
<?php
$tid = $_SESSION['tid'];
$select = mysqli_query($link, "SELECT SUM(Total) FROM twallet ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "0.00";
}
else{
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.number_format($row['SUM(Total)'],2,".",",");
}
}
}
?>
</strong>
	</button>
	<hr>		
			   <b style="float:right;">ALL MEMBERSHIP SAVINGS</b><br>
        <hr>
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ZIP ID</th>
                  <th>Member</th>
				 				  <th>Email</th>
                  <th>Account No.</th>
                  <th>Account Bals</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody> 
<?php
$select = mysqli_query($link, "SELECT * FROM twallet ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$bals = $row['Total'];
$id = $row['id'];
$tid = $row['tid'];

$select1 = mysqli_query($link, "SELECT * FROM user where id = '$tid' ") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
    $name = $row1['name'];
    $email = $row1['email'];
    $accountno = $row1['account_no'];
    $nin = $row1['nin'];
    
    

?>   
      <tr>
      <td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
      <td><?php echo $tid; ?></td>
				<td><?php echo $name ; ?></td>
				<td><?php echo $email; ?></td>
        <td><?php echo $accountno; ?></td>
				<td><?php echo number_format($bals,2,'.',','); ?></td>
        <td><?php echo ($pdelete == '1') ? '<button data-target= "#c" data-toggle="modal" type="button" class="btn btn-flat btn-danger" disabled="disabled"><i class="fa fa-trash"></i>&nbsp;Delete</button>' : ''; ?>
      </td>
			</tr>
      
<?php 
   }
   }
  }
//while statements ends here...
$sum = mysqli_query($link, "SELECT SUM(Total) as Total FROM twallet ") or die (mysqli_error($link));
while($row2 = mysqli_fetch_array($sum)){
$totals = $row2['Total'];

 ?>         <tr style="background:skyblue; font-weight:700;">
            <td colspan="5">General Totals:</td>
            <td colspan="2"><?php echo $currency.": ".number_format($totals,0,".",",")."/-"; ?></td>
            </tr>
             </tbody>
                </table>  
			
<?php
}
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='mywallet.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM twallet WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='mywallet.php?id=".$_SESSION['tid']."'; </script>";
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