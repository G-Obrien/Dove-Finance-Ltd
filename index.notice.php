
<!DOCTYPE html>
<html lang="en">

<body>
  <style>
  .b-noty{
    color:brown;
    background:white;
    padding:4px;
    width:100%;
    font-weight:600;
  }
</style>
</body>
</html>
<?php
//At the end of the month, we need to inlcude the cahrges for sending messages 
$day = date("d");
$month = date("m");
$year = date("Y");
$todate = $day." - ".$month." - ".$year;
$datein = cal_days_in_month(CAL_DOW_DAYNO, $month, $year);
if($day == $datein)
{
  $notifications = "<div >  The Month Has Ended!! - Please Ensure you pay for SMS Services Today!</div>";
  include("application/alert_sender/sms_charges.php");
}
elseif($day <= date(10)){
	//empty action
  $notifications = "<div >  You have Started a New Month of Operation. Wish you Good Luck!</div>";
}
elseif($day >= date(10) && $day <= date(20)){
	//empty action
  $notifications = "<div >  You Are in the Mid Month of Operation. Wish you Success!</div>";
}
elseif($day >= date(20)){
	//empty action
  $notifications = "<div > You Are Soon Ending This Month of Operation, Ensure to pay for SMS Services..!</div>";
}
else{
	//empty action
}
//echo "<div class='b-noty'>REMINDER: ". $notifications. "<b class='box1'> DATE: ". $todate."</b></div>";

?>  
 <style>
   .box1{
    color:white;
    background:brown;
    padding:4px;
    font-weight:300;
    font-family:jura;
    font-size:12px;
   }
  .b-noty{
    display: flex;
    justify-content:space-between;
    color:brown;
    background:white;
    padding:4px;
    width:100%;
    height:25px;
    font-weight:600;
  }
</style>