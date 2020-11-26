<?php 
session_start();
session_desroy();
echo "<script>alert('Berhasil Logout'); window.location.href='index.php'</script>";
?>