<div class="row">
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Member Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
  <div class="small-box bg-aqua">
       
   <div class="inner">
	  <h4>
        <?php
        $tid = $_SESSION['tid'];
        $select = mysqli_query($link, "SELECT Total FROM twallet WHERE tid = '$tid'") or die (mysqli_error($link));
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
        echo $currency.": ".number_format($row['Total'],2,".",",")."</b>";
        }
        }
        }
        ?>		
  	</h4>
       <p>My Account</p>
    </div>
   <div class="icon"><img height="80" width="80" src="../img/fair.png">
     <i class=""></i>
   </div>
   <a href="mywallet.php?tid=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("404"); ?>" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a>
   </div>		  
</div>
<?php
}
else{
	echo '';
}
?>
        <!-- ./col -->
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
   <div class="small-box bg-green">
     <div class="inner">
			
<h4>
    <?php 
      $select = mysqli_query($link, "SELECT SUM(amount) FROM loan_info") or die (mysqli_error($link));
      while($row = mysqli_fetch_array($select))
      {
      $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
      while($row1 = mysqli_fetch_array($select1))
      {
      $currency = $row1['currency'];
      echo $currency.": ".number_format($row['SUM(amount)'],2,".",",")."</b>";
      }
      }
    ?>
</h4>
			<p>Total Loans</p>
            </div>
        <div class="icon"><img height="80" width="80" src="../img/fair.png"> <i class=""></i> </div>
             <?php echo ($pread == 1) ? '<a href="listloans.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("405").'" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a> </div>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
        </div>
  <?php
    }
    else{
      echo '';
    }
  ?>
          <!-- ./col -->
  <?php
    $check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
      $get_check = mysqli_fetch_array($check);
      $pcreate = $get_check['pcreate'];
      $pread = $get_check['pread'];
    if($pcreate == '1' || $pread == '1')
    {
  ?>

<div class="col-lg-3 col-xs-6">
    <!-- small box -->
   <div class="small-box bg-red">
     <div class="inner">
 			
			<h4>
      <?php
        $select = mysqli_query($link, "SELECT * FROM borrowers WHERE comment != ''") or die (mysqli_error($link));
        $num = mysqli_num_rows($select);
        echo $num;
      ?>
     </h4>
            <p>Borrowers</p>
            </div>
              <div class="icon"><img height="80" width="80" src="../img/ass.png">
                <i class=""></i>
              </div>
            <?php echo ($pread == 1) ? '<a href="listborrowers.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("403").'" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
<?php
}
else{
	echo '';
}
?>
		
    <?php
      $check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Employee Details'") or die ("Error" . mysqli_error($link));
        $get_check = mysqli_fetch_array($check);
        $pcreate = $get_check['pcreate'];
        $pread = $get_check['pread'];
      if($pcreate == '1' || $pread == '1')
      {
    ?>
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
			<h4>
          <?php
          $select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
          $num = mysqli_num_rows($select);
          echo $num;
          ?>
			</h4>
        <p>All Members</p>
    </div>
  <div class="icon">  
    <img height="80" width="80" src="../img/comittee.png">
    <i class=""></i>
       </div>
          <?php echo ($pread == 1) ? '<a href="listemployee.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("409").'" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
<?php
}
else{
	echo '';
}
?>

<!-- ./col -->
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
 			
			<h4>
<?php 
$select = mysqli_query($link, "SELECT SUM(amount_to_pay) FROM payments") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.": ".number_format($row['SUM(amount_to_pay)'],2,".",",")."</b>";
}
}
?>
			</h4>
              <p>Payments Made </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="listpayment.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("408").'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
<?php
}
else{
	echo '';
}
?>
        <!-- ./col -->	

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Savings Account'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
 			
			<h4>
<?php 
$select = mysqli_query($link, "SELECT SUM(amount) FROM transaction WHERE t_type = 'Withdraw'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.": ".number_format($row['SUM(amount)'],2,".",",")."</b>";
}
}
?>
			</h4>
          <p>Total Withdraws </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/utility.png">
              <i class=""></i>
            </div>
            <?php echo ($pread == 1) ? '<a href="transaction.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("408").'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
        <!-- ./col -->	

			<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
 			
			<h4>
<?php
$select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
			</h4>
              <p>Company Users </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/school.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="user.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("403").'" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
 			
			<h4>
<?php 
$selecte = mysqli_query($link, "SELECT * FROM transaction") or die (mysqli_error($link));
$nume = mysqli_num_rows($selecte);
echo $nume;
?>
			</h4>
              <p>Total Transactions </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/report.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="transaction.php?tid='.$_SESSION['tid'].'&&mid='.$nume.'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
        <!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
 			
			<h4>
<?php 
$select = mysqli_query($link, "SELECT SUM(amount) FROM transaction WHERE t_type = 'Deposit'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.": ".number_format($row['SUM(amount)'],2,".",",")."</b>";
}
}
?>
			</h4>
              <p>Total Deposits </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="transaction.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("408").'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
        <!-- ./col -->	
<?php
}
else{
	echo '';
}
?>
		
	 <section class="content">
      <div class="row">
		</div>
		<!--  Event codes starts here-->
		 
<div class="box box-info">
      <?php
      $check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
      $get_check = mysqli_fetch_array($check);
      $pcreate = $get_check['pcreate'];
      $pread = $get_check['pread'];
      if($pcreate == '1' || $pread == '1')
      {
      ?>
    <div class="box-body">
			<div class="alert alert-info" align="center" class="style2" style="color: #FF0000">LOAN INFORMATION CHARTS</div>
          <div id="chartdiv"></div>	              
			</div>
<?php
}
else{
	echo '';
}
?>			
       
</div>	
</div>	