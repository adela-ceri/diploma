<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kontakte
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box box-solid">
            <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <th>ID</th>
                <th>Emri</th>
                <th>Email</th>
                <th>Subjekti</th>
                <th width="50%">Mesazhi</th>
              </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM contact");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                          <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['subject']."</td>
                            <td>".$row['message']."</td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      </div>
      </div>

    </section>

  </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->
<?php include 'includes/scripts.php'; ?>

</body>
</html>
