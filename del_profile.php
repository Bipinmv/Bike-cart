<?php

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];


$sql="DELETE FROM `tbl_buyer_reg` WHERE `SI.no`=$myid";
$result=mysql_query($sql);
if($result)

{

?>
<script>
alert('DATA DELETED');
window.location.href='index.php';
</script>
<?php



}

else
{
?>
<script>
alert('DATA NOT DELETED');
window.location.href='buyer_profile.php';
</script>
<?php
}


?>