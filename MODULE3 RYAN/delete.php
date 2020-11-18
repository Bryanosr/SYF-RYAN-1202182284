<?php
  include "event.php";
  $siswaID=$_GET['id'];
  $query=mysql_query("DELETE FROM event_table WHERE id='$koneksi'");
  if ($query) {
   header("event.php");
  } 
?>