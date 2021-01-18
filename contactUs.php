<?php
	include 'includes/session.php';
	if(isset($_POST['contactAdd'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM contact WHERE name =:name ");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();
			try{
				$stmt = $conn->prepare("INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
				$stmt->execute(['name'=>$name, 'email'=>$email, 'subject'=>$subject, 'message'=>$message]);


			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Ploteso formen';
	}

	header('location: index.php');

?>
