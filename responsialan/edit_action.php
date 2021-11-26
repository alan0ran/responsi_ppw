<?php
include 'db.php';

$id = $_GET['item_id'];
$code = $_POST['item_code'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$unit = $_POST['unit'];
$date = $_POST['date'];
$category = $_POST['category'];
$status = $_POST['status'];
$unit_price = $_POST['unit_price'];

$syntax = mysqli_query($database,"UPDATE inventory SET item_id='$code',item_name='$name',amount='$amount',unit='$unit',arrival_date='$date',category='$category',item_status='$status',price='$unit_price' WHERE item_id='$id'");
$database->query($syntax);

header("location:inventory_list.php");