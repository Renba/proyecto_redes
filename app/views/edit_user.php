<?php
session_start();
require_once("../daos/userDao.php");
$result = getUser();
if($result->num_rows > 0){
  $row = $result->fetch_assoc();
}
?>
<?php include('layouts/layout.php'); ?>
</head>

<body>
    <!-- Navigation -->
    <?php include('layouts/nav_bar.php'); ?>
    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Bienvenido, por favor registra tu información <strong><?= $_SESSION["email"] ?></strong></h2>
            </div>
            <div class="col-md-6">
              <form action="../controllers/update_user.php" method="post">
                <input type="name" class="form-control hidden" id="matricula" name="matricula" value="<?= $_SESSION["email"] ?>" required>
                <div class="form-group">
                  <label for="formGroupExampleInput">Nombre</label>
                  <input type="name" class="form-control" id="name" name="name" placeholder="nombre completo" value ="<?= $row["name"]?>" required>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value ="<?= $row["email"] ?>" placeholder="example@example.com">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                  <p>Proyecto de la Asignatura de Desarrollo web con Ajax de la Facultad de Matemáticas</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="index.php">Home</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->

</body>

</html>
