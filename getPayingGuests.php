<?php

include "serverConn.php";

// Check connection
if ($conn->connect_error) {

  echo ("Connection failed: " . $conn->connect_error);
}

$sql = "
        SELECT *
        FROM paganti

        ";

$result = $conn->query($sql);

$res = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $res[] = $row;
        // var_dump($res); die();
     }
} else {

    echo "0 results";
}

$conn->close();

echo json_encode( $res )
?>
