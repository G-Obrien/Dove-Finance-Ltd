<?php

//Modal Print transaction reciept

$select = mysqli_query($link, "SELECT * FROM transaction") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
?>

<div class="modal fade" id="myModal<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog" id="printableArea">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<legend style="color: green; text-align:center;"><?php echo ($row['t_type'] == "Withdraw") ? 'Withdrawal' : 'Deposit'; ?> Receipt</legend>
        </div>
        <div class="modal-body">
<?php
$search = mysqli_query($link, "SELECT * FROM systemset");
$get_searched = mysqli_fetch_array($search);
?>	
			<div align="center" style="color: green;">
			<?php echo ($get_searched['image'] == "") ? 'No Stamp Yet...' : '<img src="../image/'.$get_searched['image'].'" width="90" height="90"/>'; ?>
			<h4><strong><?php echo $get_searched['name']; ?></strong></h4>
		
		</div>
			<hr>
			
			<table id="example1" class="table table-bordegreen table-striped">
				<tr>
				<td width="200">Transaction ID: </td>
				<th style="color: brown;"><?php echo $row['TID']; ?></th>
				</tr>
        <tr>
				<td width="200">Full Name: </td>
				<th style="color: brown;"><?php echo strtoupper($row['fn']); ?> &nbsp; <?php echo strtoupper($row['ln']); ?></th>
				</tr>
				
				<tr>
				<td width="200">Account Number: </td>
				<th style="color: brown;"><?php echo strtoupper($row['acctno']); ?></th>
				</tr>

				<tr>
				<td width="200">Transaction Type</td>
				<th style="color: brown;"><?php echo ($row['t_type'] == "Withdraw") ? 'Withdraw '.'&nbsp;'.'from'.'&nbsp;'.$row['acctno'] : 'Deposit'.'&nbsp;'.'to'.'&nbsp;'.$row['acctno']; ?></th>
				</tr>

				<tr>
					<td width="200">Transaction Amounts:</td>
				<th style="color: brown;"><?php echo $get_searched['currency']. ': '.number_format($row['amount'],2,'.',','); ?></th>
				</tr>
       
				<?php
				$acc = $row['acctno'];

				$search1 = mysqli_query($link, "SELECT * FROM user where account_no = '$acc' ");
				$get_searched1 = mysqli_fetch_array($search1);
				$tid = $get_searched1['id'];

				$search2 = mysqli_query($link, "SELECT * FROM twallet where tid = '$tid' ");
				$get_searched2 = mysqli_fetch_array($search2);
				?>	
				<tr>
					<td width="200">Remaining Account Bals:</td>
				<th style="color: brown;"><?php echo $get_searched['currency']. ': '.number_format($get_searched2['Total'],2,'.',','); ?></th>
				</tr>

				<tr>
					<td width="200">Transaction Date:</td>
				<th style="color: brown;"><?php echo date("m/d/Y", strtotime($row['date_time']))." Time:  ". date("h:i a", strtotime($row['date_time'])); ?></th>
				</tr>
				<tr><td></td></tr>
				<tr>
				<td width="200">Stamp: </td>
				<th style="color: brown;"><div><?php echo ($get_searched['stamp'] == "") ? 'No Stamp Yet...' : '<img src="../image/'.$get_searched['stamp'].'" width="80" height="80"/>'; ?></div></th>
				</tr>
                <tr>
			</table>
			
			<div class="box-footer">
				<button type="button" onclick="window.print();" class="btn btn-warning pull-right" ><i class="fa fa-print"></i>Print</button>
			</div>
			
        </div>
      </div>    
    </div>
</div>
<?php } ?>