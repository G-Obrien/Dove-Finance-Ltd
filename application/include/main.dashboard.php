<div class="row">
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>
<style>
  p{
    color:black;
    font-weight:900;
    font-size:26px;
    font-family:sans;
  }
  .bg-grey{
    background: rgba(202, 202, 199, 0.781);
  }
  .bg-b1{
    background:  rgba(160, 171, 202, 0.781);
  }
    .bg-green1{
    background: rgba(187, 238, 194, 0.781);
  }
    .bg-yellow1{
    background: rgba(245, 207, 138, 0.781);
  }

   .bg-grey:hover{
    background: rgba(29, 73, 38, 0.781);
    color:white;
  }
  .bg-b1:hover{
     background: rgba(29, 73, 38, 0.781);
     color:white;
  }
    .bg-green1:hover{
     background: rgba(29, 73, 38, 0.781);
     color:white;
  }
    .bg-yellow1:hover{
     background: rgba(29, 73, 38, 0.781);
     color:white;
  }
</style>
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
  <div class="small-box bg-b1">
       
   <div class="inner">
	  <h4>
        <?php
        $tid = $_SESSION['tid'];
        $select = mysqli_query($link, "SELECT SUM(Total) as companyBals FROM twallet ") or die (mysqli_error($link));
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
          $sum = $row['companyBals'];
        $currency = $row1['currency'];
        echo $currency.": ".number_format($sum,2,".",",")."</b>";
        }
        }
        }
        ?>		
  	</h4>
       <p>DFL ACCOUNT BALS</p>
    </div>
   <div class="icon"><img height="60" width="60" src="../img/fair.png">
     <i class=""></i>
   </div>
   <a href="all-wallet.php?tid=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("404"); ?>" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a>
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
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
   <div class="small-box bg-green1">
     <div class="inner">
			
<h4>
    <?php 
      $select = mysqli_query($link, "SELECT SUM(amount) as loanAmounts FROM loan_info") or die (mysqli_error($link));
      while($row = mysqli_fetch_array($select))
      {
      $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
      while($row1 = mysqli_fetch_array($select1))
      {
      $currency = $row1['currency'];
      echo $currency.": ".number_format($row['loanAmounts'],2,".",",")."</b>";
      }
      }
    ?>
</h4>
			<p>GENERAL LOANS</p>
            </div>
        <div class="icon"><img height="60" width="60" src="../img/fair.png"> <i class=""></i> </div>
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
    $check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
      $get_check = mysqli_fetch_array($check);
      $pcreate = $get_check['pcreate'];
      $pread = $get_check['pread'];
    if($pcreate == '1' || $pread == '1')
    {
  ?>

<div class="col-lg-3 col-xs-6">
    <!-- small box -->
   <div class="small-box bg-grey">
     <div class="inner">
 			
			<h4>
      <?php
        $select = mysqli_query($link, "SELECT * FROM borrowers ") or die (mysqli_error($link));
        $num = mysqli_num_rows($select);
        echo $num;
      ?>
     </h4>
            <p>ALL BORROWERS COUNT</p>
            </div>
              <div class="icon"><img height="60" width="60" src="../img/ass.png">
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
      $check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
        $get_check = mysqli_fetch_array($check);
        $pcreate = $get_check['pcreate'];
        $pread = $get_check['pread'];
      if($pcreate == '1' || $pread == '1')
      {
    ?>
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow1">
    <div class="inner">
			<h4>
          <?php
          $select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
          $num = mysqli_num_rows($select);
          echo $num;
          ?>
			</h4>
        <p>DFL MEMBERS COUNT</p>
    </div>
  <div class="icon">  
    <img height="60" width="60" src="../img/comittee.png">
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
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey">
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
              <p>TOTAL PAYMENTS</p>
            </div>
            <div class="icon"><img height="60" width="60" src="../img/fair.png">
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
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Dashboard'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
if($pcreate == '1' || $pread == '1')
{
?>		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-b1">
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
          <p>TOTAL WITHDRAWS </p>
            </div>
            <div class="icon"><img height="60" width="60" src="../img/utility.png">
              <i class=""></i>
            </div>
            <?php echo ($pread == 1) ? '<a href="transaction.single.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("408").'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
        <!-- ./col -->	

			<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey">
            <div class="inner">
 			
			<h4>
<?php
$select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
			</h4>
              <p>ALL USERS COUNT</p>
            </div>
            <div class="icon"><img height="60" width="60" src="../img/school.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="user.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("403").'" class="small-box-footer">Click To view details <i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green1">
            <div class="inner">
 			
			<h4>
<?php 
$selecte = mysqli_query($link, "SELECT * FROM transaction") or die (mysqli_error($link));
$nume = mysqli_num_rows($selecte);
echo $nume;
?>
			</h4>
              <p>TOTAL TRANSACTIONS COUNTS</p>
            </div>
            <div class="icon"><img height="60" width="60" src="../img/report.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="transaction.php?tid='.$_SESSION['tid'].'&&mid='.$nume.'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
        <!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow1">
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
              <p>TOTAL DEPOSITS </p>
            </div>
            <div class="icon"><img height="60" width="60" src="../img/fair.png">
              <i class=""></i>
            </div>
             <?php echo ($pread == 1) ? '<a href="transact.single-desposit.php?tid='.$_SESSION['tid'].'&&mid='.base64_encode("408").'" class="small-box-footer">Click To view details<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
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