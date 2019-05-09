<?php

if ($_GET["id"] && $_GET["name"] && $_GET["lastname"]) {

  $id = $_GET["id"];
  $name = $_GET["name"];
  $lastname = $_GET["lastname"];

  include "serverConn.php";
  // Check connection
  if ($conn->connect_error) {

    echo ("Connection failed: " . $conn->connect_error);
  }

  $sql = "
        UPDATE paganti
        SET name = $name, lastname = $lastname
        WHERE id = $id
        ";

  $result = $conn->query($sql);
  var_dump($result); die();

  $conn->close();

}

?>
