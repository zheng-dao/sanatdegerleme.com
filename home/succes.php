<?php 

if ($_GET["transaction"] !== "success") {
	header("Location:javascript://history.go(-1)");
}
else{
	header("Location:fiyatlar?succes=succes");
}
?>