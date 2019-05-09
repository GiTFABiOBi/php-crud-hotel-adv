<?php

if ($_GET["id"]) {

  $id = $_GET["id"];

  include "serverConn.php";
  // Check connection
  if ($conn->connect_error) {

    echo ("Connection failed: " . $conn->connect_error);
  }

  $sql = "
        DELETE FROM paganti
        WHERE id = $id
        ";

  $result = $conn->query($sql);

  $conn->close();

}

?>
