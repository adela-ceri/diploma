<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE products SET name=:name, WHERE id=:id");
			$stmt->execute(['name'=>$name,'id'=>$id]);
			$_SESSION['success'] = 'Formulari u perditesua me sukses!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Ploteso Formularin!';
	}

	header('location: products.php');

?>
