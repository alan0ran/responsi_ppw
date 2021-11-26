<?php
include "db.php";
$code = $_GET["item_id"];
$syntax = mysqli_query($database,"DELETE FROM inventory WHERE item_id='$code'");
$database->query($syntax);

header("location:inventory_list.php");