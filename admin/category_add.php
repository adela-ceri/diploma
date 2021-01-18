
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$catslug = $_POST['catslug'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Kategoria ekziston!';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO category (name, cat_slug) VALUES (:name, :catslug)");
				$stmt->execute(['name'=>$name,'catslug'=>$catslug]);
				$_SESSION['success'] = 'Kategoria u shtua me sukses!';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Ploteso formen!';
	}

	header('location: category.php');

?>
