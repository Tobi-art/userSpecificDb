<?php
include('_func.php');
$dbnm = $_SESSION['user_nm'];

$category = 'Mami ha';
$item = 'tobi ga';
$location = 'suki';

$sql = ('INSERT INTO ' . $dbnm . ' (id, category, item, location, expire, indate) VALUES(NULL, :category, :item, :location, sysdate(), sysdate())');
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":category", $category);
$stmt->bindValue(":item", $item);
$stmt->bindValue(":location", $location);
$status = $stmt->execute();

var_dump($status);
exit;
