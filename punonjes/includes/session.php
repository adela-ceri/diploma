<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['punonjes']) || trim($_SESSION['punonjes']) == '' ){
		header('location: ../index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(['id'=>$_SESSION['punonjes']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>
