<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Transaction >>> Deposits
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="maindashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="transaction.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>">All Transaction</a></li>
        <li class="active">Specific-Deposit</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/data.transaction.single-deposit.php"); ?>
	</section>
</div>	

<?php 
//to include transaction receipt 

include("modal/transaction_modal.php"); ?>

<?php include("include/footer.php"); ?>