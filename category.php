<?php include 'includes/session.php'; ?>
<?php if (!isset($_SESSION['user'])) {
	header('location: index.php');
}
?>
<?php
	$slug = $_GET['category'];
	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
		            <h1 class="page-header"><?php echo $cat['name']; ?></h1>
		       		<?php

		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid ");
						    $stmt->execute(['catid' => $catid]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<h5>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer text-center'>
													<span><a href=#".$row['name']." data-toggle='modal' btn btn-primary btn-sm btn-flat id='addproduct'></i>Ploteso Formularin</a></span>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>";
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?>
	        </div>
	      </section>

	    </div>
	  </div>

  	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
