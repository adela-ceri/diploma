<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php if (!isset($_SESSION['user'])) {
	header('location: index.php');
}
?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">
	      <!-- Main content -->
	      <section class="content">
          <div class="row">

            <?php

              $conn = $pdo->open();
              try{
                $stmt = $conn->prepare("SELECT * FROM category");
                $stmt->execute();
                foreach($stmt as $row){
                  echo "
                    <div class='col-lg-6 col-xs-6'>
                      <!-- small box -->
                      <div class='small-box bg-aqua'>
                        <div class='inner text-center'>

                          <p>".$row['name']."</p>
                        </div>
                          <a href='category.php?category=".$row['cat_slug']."' class='small-box-footer'>Formularet <i class='fa fa-arrow-circle-right'></i></a>
                        </div>
                      </div>
                      ";
                }
              }
              catch(PDOException $e){
                echo "There is some problem in connection: " . $e->getMessage();
              }

              $pdo->close();

            ?>
            <!-- ./col -->
	      </section>
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>
