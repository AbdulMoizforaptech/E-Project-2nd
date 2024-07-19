<?php
session_start();
unset($_SESSION['patient_session']);
echo "<script>window.location.href= 'login.php'</script>";
?>