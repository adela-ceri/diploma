<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM contact WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Kontakti u fshi me sukses!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Zgjidh Kontaktin!';
	}

	header('location: contact.php');

?>
