<?php
session_start();
unset($_SESSION['hospital_session']);
echo "<script>window.location.href= 'login.php'</script>";
?>