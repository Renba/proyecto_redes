<?php include('layouts/layout2.php'); ?>
</head>

    <!-- Navigation -->
<body>
  <?php include('layouts/nav_bar.php'); ?>

    <!-- Header Carousel -->

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
        </div>

        <!-- Features Section -->
        <div class="row">
          <div class="row">
              <div class="col-lg-10">
                  <h1 class="page-header" onclick="displayTabla();"><label class="label label-default"><span class="glyphicon glyphicon-th-list"></span>Dispositivos</label>
                  </h1>
              </div>
              <div class="col-lg-2">
                <h1 class="page-header">
                  <button type="button" class="btn btn-success" onclick="displayCreate();"><span class="glyphicon glyphicon-plus"></span> Agregar Dispotivo</button>
                </h1>
              </div>
          </div>
          <div id="index">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre de Dispositivo</th>
                  <th>Mac addresss</th>
                </tr>
              </thead>
              <tbody id="body">
              </tbody>
            </table>
          </div>
          <div id="action">
          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                  <p>Proyecto de la Asignatura de Redes y Seguridad de la Facultad de Matemáticas</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="devices.php">Dispositivos</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Abner Collí Proyecto de Redes</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
