<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>

<style>
.loader {
  border: 16px solid #1d7224;
  border-radius: 50%;
  border-top: 16px solid rgba(113, 113, 180, 0.918);
  border-right: 16px solid rgb(92, 161, 92);
  border-bottom: 16px solid rgb(202, 69, 69);
  border-left: 16px solid rgb(94, 141, 243);
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
<div style="width:100%;text-align:center;vertical-align:bottom">
		<div class="loader"></div>
<?php

	session_destroy();
	
 echo '<meta http-equiv="refresh" content="2;url=index.php">';
echo '<br>';
echo'<span class="itext" style="color: #FF0000">Quitting... Please Wait!...</span>';
?>
</div>
</body>
</html>
