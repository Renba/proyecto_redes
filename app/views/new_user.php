<?php
session_start();
?>
<?php include('layouts/layout.php'); ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="http://www.matematicas.uady.mx/static/">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../views/devices.php">Dispositivos(<?=$_SESSION["email"]?>)</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Bienvenido, por favor registra tu información</h2>
            </div>
            <div class="col-md-6">
              <form action="../controllers/new_user.php" method="post">
                <input type="name" class="form-control hidden" id="matricula" value="<?= $_SESSION["email"] ?>">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nombre</label>
                  <input type="name" class="form-control" id="name" placeholder="nombre completo">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="example@example.com">
                </div>
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
