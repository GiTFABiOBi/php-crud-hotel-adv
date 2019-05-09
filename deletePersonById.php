<?php

if ($_GET["id"]) {

  $id = $_GET["id"];

  include "serverConn.php";
  // Check connection
  if ($conn->connect_error) {

    echo ("Connection failed: " . $conn->connect_error);
  }

  $sql1 = "
        DELETE FROM pagamenti
        WHERE pagante_id = $id
        ";

  $sql2 = "
          DELETE FROM paganti
          WHERE id = $id
          ";
          
  $conn->query($sql1);
  $conn->query($sql2);

  $conn->close();

}

?>
