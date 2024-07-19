<?php
include("../../admin/config.php");
$query = "UPDATE tbl_appointment SET status = 'Decline' WHERE id = $_GET[id]";
$result = mysqli_query($conn, $query);
header('location:../appointment.php');
//echo "<script>window.location.href'../feedback.php'</script>";
?>