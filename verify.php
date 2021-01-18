<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		try{
			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
					if(password_verify($password, $row['password'])){
						if($row['type'] == 1){
							$_SESSION['admin'] = $row['id'];
						}
						else if ($row['type'] == 2) {
							$_SESSION['punonjes'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Fjalkalim i gabuar!';
					}
			}
			else{
				$_SESSION['error'] = 'Email nuk ekziston!';
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Vendos kredencialet!';
	}

	$pdo->close();

	header('location: login.php');

?>
