<?php
include("../config.php");
$query = "UPDATE tbl_feedback SET status = 'hide' WHERE id = $_GET[id]";
$result = mysqli_query($conn, $query);
header('location:../feedback.php');
//echo "<script>window.location.href'../feedback.php'</script>";
?>