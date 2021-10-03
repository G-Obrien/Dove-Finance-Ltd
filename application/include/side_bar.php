<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
		<?php 
			$id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('User Image Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			
			?>
          <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row ['username'] ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		  <?php }}?>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("401")))
{
?>
		<li class="active"><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><i class="fa fa-dashboard"></i> <span>My Dashbord</span></a></li>
<?php
}
else{
	?>
		<li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><i class="fa fa-dashboard"></i> <span>My Dashbord</span></a></li>
<?php } ?>
		
		<?php
	//Main Dashboard

	if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("400")))
	{
	$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
	$get_check = mysqli_fetch_array($check);
	$pread = $get_check['pread'];
	?>	
		<?php echo ($pread == 1) ? '<li class="active"><a href="maindashboard.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("400").'"><i class="fa fa-book"></i> <span>General Dashboard</span></a></li>' : ''; ?>
	<?php
	}
	else{
	$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
	$get_check = mysqli_fetch_array($check);
	$pread = $get_check['pread'];
		?>
		<?php echo ($pread == 1) ? '<li><a href="maindashboard.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("400").'"><i class="fa fa-book"></i> <span>General Dashboard</span></a></li>' : ''; ?>
	<?php
	} 
	//Main Dashboard 
	?>	


<?php
//PersonalAccount

if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("404")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
?>	
	<?php echo ($pread == 1) ? '<li class="active"><a href="mywallet.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>My Accounts</span></a></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
	?>
	<?php echo ($pread == 1) ? '<li><a href="mywallet.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>My Accounts</span></a></li>' : ''; ?>
<?php
 } 
 //My Account 
 ?>	

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("409")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>			
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fas fa-users"></i>  <span> Members Account</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="addcustomer.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="fas fa-user-shield"></i> New Account</a></li>' : ''; ?> 
		<?php echo ($pread == 1) ? '<li><a href="user.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="far fa-id-card"></i> Users Account</a></li>' : ''; ?> 
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>			
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fas fa-users"></i>  <span> Members Account</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
	<?php echo ($pread == 1) ? '<li><a href="addcustomer.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="fas fa-user-shield"></i> New Account</a></li>' : ''; ?> 
		<?php echo ($pread == 1) ? '<li><a href="user.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("409").'"><i class="far fa-id-card"></i> Users Account</a></li>' : ''; ?> 
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("405")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fas fa-coins"></i> <span>Loans</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fas fa-hand-holding-usd"></i> New Loans</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fas fa-receipt"></i> All Loans </a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="collateral.php"><i class="fas fa-key"></i> Collaterals</a></li>' : ''; ?>
				<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fas fa-coins"></i> <span>Loans</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fas fa-hand-holding-usd"></i> New Loans</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fas fa-receipt"></i> All Loans</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="collateral.php"><i class="fas fa-key"></i> Collaterals</a></li>' : ''; ?>
				<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>
		
	
	
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("403")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-users"></i> <span>Borrowers</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>New Borrowers</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>Borrowers List</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-users"></i> <span>Borrowers</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>New Borrowers</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>List Borrowers</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php } ?>		
 
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("410")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>			
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fas fa-users"></i>  <span> Transactions </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="deposit.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Deposit Money</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="withdraw.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Withdraw Money</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="transaction.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>All Transaction</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>			
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fas fa-users"></i>  <span> Transactions </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="deposit.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Deposit Money</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="withdraw.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Withdraw Money</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="transaction.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>All Transaction</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>

<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("407")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Missed Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
?>		
		
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Missed Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pread = $get_check['pread'];
?>		
		
<?php
  } 
 ?>
	
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("408")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
        <?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fab fa-cc-amazon-pay"></i> <span>Payments</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 	    	<?php echo ($pcreate == 1) ? '<li class="active"><a href="newpayments.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fas fa-certificate"></i> New Payment</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="far fa-money-bill-alt"></i> Payments List</a></li>' : ''; ?>
       	<?php echo ($pread == 1) ? '<li class="active"><a href="missedpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("407").'"><i class="fas fa-money-bill"></i> <span>Missed Payment</span></a></li>' : ''; ?>	
				<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>	
        <?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fab fa-cc-amazon-pay"></i> <span>Payments</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 	    	<?php echo ($pcreate == 1) ? '<li class="active"><a href="newpayments.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fas fa-certificate"></i> New Payment</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="listpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="far fa-money-bill-alt"></i> Payments List</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="missedpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("407").'"><i class="fas fa-money-bill"></i> <span>Missed Payment</span></a></li>' : ''; ?>	
				<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 
<?php } ?>
	
<?php

  ////  *** Email messeage::

if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("402")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Email Panel'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>
		
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Email Panel'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
	?>	
		
<?php } ?>

<?php
		if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("406")))
		{
		$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
		$get_check = mysqli_fetch_array($check);
		$pcreate = $get_check['pcreate'];
		$pread = $get_check['pread'];
		?>		
				<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fas fa-envelope-square"></i> <span>Messages & Emails</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
				<?php echo ($pcreate == 1) ? '<li class="active"><a href="newmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fas fa-comment-dots"></i> New Message</a></li>' : ''; ?>
						<?php echo ($pread == 1) ? '<li><a href="inboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fas fa-sms"></i> Inbox Message</a></li>' : ''; ?>
						<?php echo ($pread == 1) ? '<li><a href="outboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fas fa-reply-all"></i> Outbox Message</a></li>' : ''; ?>
					
						<?php echo ($pcreate == 1) ? '<li><a href="newemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fas fa-paper-plane"></i> Compose Email</a></li>' : ''; ?>
						<?php echo ($pread == 1) ? '<li><a href="listemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fas fa-inbox"></i> Email Box</a></li>' : ''; ?>
						<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
		<?php
		}
		else{
		$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
		$get_check = mysqli_fetch_array($check);
		$pcreate = $get_check['pcreate'];
		$pread = $get_check['pread'];
		?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fas fa-envelope-square"></i> <span>Message & Emails</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fas fa-comment-dots"></i> New Message</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="inboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fas fa-sms"></i> Inbox Message</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '<li><a href="outboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'"><i class="fas fa-reply-all"></i> Outbox Message</a></li>' : ''; ?>
        
				<?php echo ($pcreate == 1) ? '<li><a href="newemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fas fa-paper-plane"></i> Compose Email</a></li>' : ''; ?>
				<?php echo ($pread == 1) ? '<li><a href="listemail.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("402").'"><i class="fas fa-inbox"></i> Email Box</a></li>' : ''; ?>
				<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>

<!--/////-->
<?php
if(isset($_GET['mid']) && (trim($_GET['mid']) == base64_encode("411")))
{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Settings'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview active"><a href="#"><i class="fa fa-gear"></i> <span>General Settings</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
	
		<?php echo ($pread == 1) ? '<li><a href="permission_list.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fas fa-drum-steelpan"></i> View User Permissions</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="add_permission.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fas fa-folder-plus"></i> Add User Permission</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="system_set.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fas fa-cogs"></i> Company Setup</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="sms.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>SMS Gateway Settings</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="backupdatabase.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fas fa-dice"></i> Backup Database</a></li>' : ''; ?>
  
		<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php
}
else{
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Settings'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-gear"></i> <span>General Settings</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="permission_list.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fas fa-drum-steelpan"></i> View User Permissions</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="add_permission.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fas fa-folder-plus"></i> Add User Permission</a></li>' : ''; ?>
		
		<?php echo ($pcreate == 1) ? '<li><a href="system_set.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fas fa-cogs"></i> Company Setup</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="sms.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>SMS Gateway Settings</a></li>' : ''; ?>
		<?php echo ($pread == 1) ? '<li><a href="backupdatabase.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fas fa-dice"></i> Backup Database</a></li>' : ''; ?>
        
		<?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
<?php } ?>
		
		
		<li>
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
		

    </section>
    <!-- /.sidebar -->
  </aside>