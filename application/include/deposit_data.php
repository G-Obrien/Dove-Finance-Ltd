<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Customer Deposit Form</h3>
            </div>
             <div class="box-body">
            
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
	<?php echo '<div class="alert alert-info fade in" >
	<a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
		<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
	</div>'?>
				<div class="box-body">

			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number or Name</label>
                  <div class="col-sm-10">
				<select name="account"  class="form-control select2" required>
							<option selected>Select Member Account</option>
		<?php
		$search = mysqli_query($link, "SELECT * FROM user");
		while($get_search = mysqli_fetch_array($search))
		{ 
		?>
			<option value="<?php echo $get_search['account_no']; ?>"><?php echo $get_search['account_no']; ?>&nbsp; [<?php echo $get_search['name']; ?>&nbsp;<?php/* echo $get_search['id'];  */ ?>]</option>
			<div display="none"></div>
	<?php

	

			}
				
			?>
		</select>
			</div>
       </div>
			
			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Deposit</label>
					<div class="col-sm-10">
						<input name="amount" type="number" class="form-control" placeholder="Enter Amount Here" required>
					</div>
				</div>
			 </div>
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Deposit</i></button>

              </div>
			  </div>

<?php

if(isset($_POST['save']))
{
	
	try{
		$account =  mysqli_real_escape_string($link, $_POST['account']);
		$amount = mysqli_real_escape_string($link, $_POST['amount']);
		$txid = 'D-DFL-'.rand(200000,1000000);
    
	$search1 = mysqli_query($link, "SELECT * FROM user where account_no ='$account' ");
   $get_search1 = mysqli_fetch_array($search1);
	 
		  $zip = $get_search1['id'];
			$fn = $get_search1['fname'];
			$ln = $get_search1['lname'];
			$em = $get_search1['email'];
			$ph = $get_search1['phone'];
			$tid1 = $get_search1['id'];
		
		$google_details = mysqli_query($link, "SELECT * FROM twallet WHERE tid = '$zip'");
		$get_details = mysqli_fetch_array($google_details);
			$tid2 = $get_details['tid'];
			$bal = $get_details['Total'];

				if($amount < 500){
				throw new UnexpectedValueException();
			}
			else{
				$total = number_format($amount + $bal,2,'.','');

			$update = mysqli_query($link, "UPDATE twallet SET Total = '$total' WHERE tid = '$tid2'") or die (mysqli_error($link));
			$insert = mysqli_query($link, "INSERT INTO transaction VALUES('', '$txid', 'Deposit', '$account', '$fn', '$ln', '$em', '$ph', '$amount', NOW())") or die (mysqli_error($link));
			if(!($update && $insert))
			{
			echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
			}
			else{
				$sql_alert = mysqli_query($link, "SELECT * FROM sms") or die (mysqli_error($link));
				$find_alert = mysqli_fetch_array($sql_alert);
				$status = $find_alert['status'];
				mysqli_query($link, $update, $insert);
				if($status == "NotActivated")
				{
					echo " ";
				}
				else{
				include("alert_sender/deposit_alert.php");
				}
				
				echo "<div class='alert alert-success'>Amount Deposited Successfully!</div>";
				}
			
		}
		}
	catch(UnexpectedValueException $ex)
	{
		echo "<div class='alert alert-danger'>Minimum Deposit Amount is 500/-, Please topup to continue!</div>";
	}

}
?>			  
			 </form> 


</div>	
</div>	
</div>
</div>