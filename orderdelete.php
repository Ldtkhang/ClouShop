<?php
$id = $_GET['id'];
$sql = "DELETE FROM `orders` WHERE orid = " . $id;
$result = mysqli_query($conn, $sql);
header("Location: $urluser?page=$order");