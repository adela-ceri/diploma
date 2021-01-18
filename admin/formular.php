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
        Formulare
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
          <div class="box box-solid">
            <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <th>ID</th>
                <th>Kategoria</th>
                <th>Nr.Identifikimit</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Veprime</th>
              </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
                    try{
                      $stmt = $conn->prepare("SELECT * FROM formulari");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['category_name']."</td>
                            <td>".$row['nid']."</td>
                            <td>".$row['emri']."</td>
                            <td>".$row['mbiemri']."</td>
                            <td><button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Fshi</button></td>
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
    <?php include 'includes/formular_modal.php'; ?>

</div>
<!-- ./wrapper -->
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: 'formular_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.id').val(response.id);
      }
    });
  }
  </script>
</body>
</html>
