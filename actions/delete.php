<?php
require_once("../Includes/connector.php");

$dataTable = $_GET['dataTable'];

$sql = "DELETE FROM $dataTable WHERE ID =:ID";

$stmt = $connect->prepare($sql);
$stmt->bindParam(":ID", $_GET['id']);
$stmt->execute();

header ("Location: ../admin/admin.php");