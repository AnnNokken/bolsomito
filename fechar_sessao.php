<?php
session_start();
$_SESSION = array();
session_destroy();
echo "<script>alert('Você saiu do sistema!'); window.location.href = 'login.php';</script>";
?>